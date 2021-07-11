<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['user_id','order_number','sub_total','quantity','delivery_charge','status','total_amount','first_name','last_name','country','post_code','address1','address2','phone','email','payment_method','payment_status','shipping_id','coupon'];

    public function cart_info(){
        // hasMany(Cart::class, khóa ngoại, id của bảng parent )
        // order_id là khóa ngoại của bảng Cart: order trong order_id nhắc tới bảng cha Order
        return $this->hasMany('App\Models\Cart','order_id','id');
    }
    public static function getAllOrder($id){
        return Order::with('cart_info')->find($id);
    }
    public static function countActiveOrder(){
        $data=Order::count();
        if($data){
            return $data;
        }
        return 0;
    }
    // Một Order thì có nhiều cart
    public function cart(){
        return $this->hasMany(Cart::class);
    }
    
// *******************Inverse Relationship: belongsTo(childClass:class, 'foreign_key of childClass')*******************

    // Một order chỉ thuộc về 1 Shipping 
    // shipping_id khóa ngoại của Order
    public function shipping(){
        return $this->belongsTo(Shipping::class,'shipping_id');
    }

    // Một Order thuộc về một User:liên kết khóa ngoại shipping_id ở bảng Orders
    // user_id : khóa ngoại của Order
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
