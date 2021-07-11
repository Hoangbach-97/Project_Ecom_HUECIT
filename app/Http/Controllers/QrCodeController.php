<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class QrCodeController extends Controller
{
    //
    public function index($id)
    {
        $order = Order::find($id);

        return view('frontend.qrcode')->with('order', $order);
    }
}
