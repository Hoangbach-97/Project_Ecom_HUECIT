@extends('frontend.layouts.master')

@section('title','B-Electronics || Theo dõi đơn hàng')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Trang chủ<i class="ti-arrow-right"></i></a></li>
                            {{-- Cho backgroundColor màu xanh: javascript:void(document.body.style.backgroundColor='green'); --}}
                            <li class="active"><a href="javascript:void(0);">Theo dõi đơn hàng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
<section class="tracking_box_area section_gap py-5">
    <div class="container">
        <div class="tracking_box_inner">
            <p>Nhập ID đơn hàng của bạn. ID đơn hàng đã được gửi kèm theo Email xác nhận khi đặt hàng .</p>
            <form class="row tracking_form my-4" action="{{route('product.track.order')}}" method="post" novalidate="novalidate">
              @csrf
                <div class="col-md-8 form-group">
                    <input type="text" class="form-control p-2"  name="order_number" placeholder="Nhập ID đơn hàng">
                </div>
                <div class="col-md-8 form-group">
                    <button type="submit" value="submit" class="btn submit_btn">Kiểm tra</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection