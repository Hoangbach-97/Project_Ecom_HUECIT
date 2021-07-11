<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Nếu người dùng truy cập cố tính gửi dữ liệu role = 'admin' trong bảng users thì $fillable được sinh ra
    // Thiết lập các cột trong một bảng có thể sử dụng tính năng Mass Assignment,
    // Tức là chỉ muốn truy vấn cột [title, slug...]
    protected $fillable=['title','slug','summary','photo','status','is_parent','parent_id','added_by'];

    // hasMany: Mối quan hệ One To Many, hasOne: One To One

    public function parent_info(){
    // Nếu xác định mối quan hệ không theo quy ước thì phải truyền vào 3 tham số hasOne(Category::class, 'foreign_key', 'local_key');
    // Trong đó: parent_id là khóa ngoại của TABLE CATEGORIES
    // Riêng trường hợp tự liên kết dưới đây: Tự bảng Categories lên kết vs chính nó
        return $this->hasOne('App\Models\Category','id','parent_id');
    }

    // Hàm lấy 10 id theo thứ tự giảm dần 
    public static function getAllCategory(){
        return  Category::orderBy('id','DESC')->with('parent_info')->paginate(10);
    }

    // Lấy id từ mảng $cat_id nơi is_parent=1
    public static function shiftChild($cat_id){
        return Category::whereIn('id',$cat_id)->update(['is_parent'=>1]);
    }
    public static function getChildByParentID($id){
        return Category::where('parent_id',$id)->orderBy('id','ASC')->pluck('title','id');
    }

    public function child_cat(){
        return $this->hasMany('App\Models\Category','parent_id','id')->where('status','active');
    }
    public static function getAllParentWithChild(){
        return Category::with('child_cat')->where('is_parent',1)->where('status','active')->orderBy('title','ASC')->get();
    }
    public function products(){
        return $this->hasMany('App\Models\Product','cat_id','id')->where('status','active');
    }
    public function sub_products(){
        return $this->hasMany('App\Models\Product','child_cat_id','id')->where('status','active');
    }
    public static function getProductByCat($slug){
        // dd($slug);
        return Category::with('products')->where('slug',$slug)->first();
        // return Product::where('cat_id',$id)->where('child_cat_id',null)->paginate(10);
    }
    public static function getProductBySubCat($slug){
        // return $slug;
        return Category::with('sub_products')->where('slug',$slug)->first();
    }
    public static function countActiveCategory(){
        $data=Category::where('status','active')->count();
        if($data){
            return $data;
        }
        return 0;
    }
}
