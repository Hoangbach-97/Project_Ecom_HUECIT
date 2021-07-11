<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;


class SmsControllerr extends Controller
{
    //
    public function sending()

    {
        // $order = Order::find($id)->with('order',$order);
        // $order = DB::table('orders')->pluck('order_number');

        // Thêm trường số điện thoại trong table users
        $MessageBird = new \MessageBird\Client(' UzddlgjJDalwFZR5MiX3sz0cm');
        $Message = new \MessageBird\Objects\Message();
        $Message->originator = 'TestMessage';
        $Message->recipients = array('+84369902214');
        $Message->body = 'B-Electronics cảm ơn qúy khách đã đặt hàng. Vui lòng quét mã QR để theo dõi đơn hàng!';

        $MessageBird->messages->create($Message);

        request()->session()->flash('success','Bạn đã đặt hàng thành công, vui lòng kiểm tra tin nhắn');
        return redirect()->route('home');
    }
}
