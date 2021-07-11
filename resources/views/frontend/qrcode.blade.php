@extends('frontend.layouts.master')
@section('title','B-Electronics || Trang chủ')
@section('main-content')
<section class="hero-slider">
   {{-- QRCODE --}}


   <div class="container mt-4" style=" margin-bottom:300px; ">
    @php
        //   $orders=DB::table('orders')->where('user_id',auth()->user()->id)->paginate(10);
    @endphp

    <div class="card">
        {{-- @foreach($orders as $order) --}}
        <div class="card-header">
        <h2 style="text-align: center">Khách hàng: <span style="color:green"> {{ $order->first_name}} {{$order->last_name}}</span></h2>
        <h3 style="text-align: center">Vui lòng quét để lưu Mã Đơn Hàng để thuận tiện theo dõi đơn hàng!</h3>
        </div>
        {{-- @endforeach --}}
        <div class="card-body" style="text-align: center">
            {!! QrCode::size(300)->generate(
             'Mã '.$order->order_number
            ) !!}
        </div>
    </div>

    
</div>



   {{-- QRCODE --}}
@endsection



