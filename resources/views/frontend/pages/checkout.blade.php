@extends('frontend.layouts.master')

@section('title','Trang thanh toán')

@section('main-content')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Trang chủ<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0)">Thanh toán</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
            
    <!-- Start Checkout -->
    <section class="shop checkout section">
        <div class="container">
            @php 
            // $order=DB::table('orders')->get();
            // $orders=DB::table('orders')->where('user_id',auth()->user()->id)->paginate(10);


            @endphp 

                                
                {{-- <form class="form" method="POST" action="{{route('cart.order',$order->id)}}"> --}}
                    <form class="form" method="POST" action="{{route('cart.order')}}">
                    @csrf
                    <div class="row"> 

                        <div class="col-lg-8 col-12">
                            <div class="checkout-form">
                                <h2>Thanh toán tại đây</h2>
                                <p>Vui lòng đăng kí để thanh toán nhanh hơn</p>
                                <!-- Form -->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label >Họ<span>*</span></label>
                                            <input type="text" name="first_name" placeholder="Họ..." value="{{old('first_name')}}" value="{{old('first_name')}}">
                                            @error('first_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Tên<span>*</span></label>
                                            <input type="text" name="last_name" placeholder="Tên..." value="{{old('lat_name')}}">
                                            @error('last_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Email<span>*</span></label>
                                            <input type="email" name="email" placeholder="Nhập Email..." value="{{old('email')}}">
                                            @error('email')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Số điện thoại <span>*</span></label>
                                            <input type="number" name="phone" placeholder="Nhập số điện thoại..." required value="{{old('phone')}}">
                                            @error('phone')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Tỉnh <span>*</span></label>
                                            <select name="country" id="country">
                                                    <option value="" disabled selected>Lựa chọn Tỉnh</option>
                                                    <option value="An Giang">An Giang
                                                    <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu
                                                    <option value="Bắc Giang">Bắc Giang
                                                    <option value="Bắc Kạn">Bắc Kạn
                                                    <option value="Bạc Liêu">Bạc Liêu
                                                    <option value="Bắc Ninh">Bắc Ninh
                                                    <option value="Bến Tre">Bến Tre
                                                    <option value="Bình Định">Bình Định
                                                    <option value="Bình Dương">Bình Dương
                                                    <option value="Bình Phước">Bình Phước
                                                    <option value="Bình Thuận">Bình Thuận
                                                    <option value="Bình Thuận">Bình Thuận
                                                    <option value="Cà Mau">Cà Mau
                                                    <option value="Cao Bằng">Cao Bằng
                                                    <option value="Đắk Lắk">Đắk Lắk
                                                    <option value="Đắk Nông">Đắk Nông
                                                    <option value="Điện Biên">Điện Biên
                                                    <option value="Đồng Nai">Đồng Nai
                                                    <option value="Đồng Tháp">Đồng Tháp
                                                    <option value="Đồng Tháp">Đồng Tháp
                                                    <option value="Gia Lai">Gia Lai
                                                    <option value="Hà Giang">Hà Giang
                                                    <option value="Hà Nam">Hà Nam
                                                    <option value="Hà Tĩnh">Hà Tĩnh
                                                    <option value="Hải Dương">Hải Dương
                                                    <option value="Hậu Giang">Hậu Giang
                                                    <option value="Hòa Bình">Hòa Bình
                                                    <option value="Hưng Yên">Hưng Yên
                                                    <option value="Khánh Hòa">Khánh Hòa
                                                    <option value="Kiên Giang">Kiên Giang
                                                    <option value="Kon Tum">Kon Tum
                                                    <option value="Lai Châu">Lai Châu
                                                    <option value="Lâm Đồng">Lâm Đồng
                                                    <option value="Lạng Sơn">Lạng Sơn
                                                    <option value="Lào Cai">Lào Cai
                                                    <option value="Long An">Long An
                                                    <option value="Nam Định">Nam Định
                                                    <option value="Nghệ An">Nghệ An
                                                    <option value="Ninh Bình">Ninh Bình
                                                    <option value="Ninh Thuận">Ninh Thuận
                                                    <option value="Phú Thọ">Phú Thọ
                                                    <option value="Quảng Bình">Quảng Bình
                                                    <option value="Quảng Bình">Quảng Bình
                                                    <option value="Quảng Ngãi">Quảng Ngãi
                                                    <option value="Quảng Ninh">Quảng Ninh
                                                    <option value="Quảng Trị">Quảng Trị
                                                    <option value="Sóc Trăng">Sóc Trăng
                                                    <option value="Sơn La">Sơn La
                                                    <option value="Tây Ninh">Tây Ninh
                                                    <option value="Thái Bình">Thái Bình
                                                    <option value="Thái Nguyên">Thái Nguyên
                                                    <option value="Thanh Hóa">Thanh Hóa
                                                    <option value="Thừa Thiên Huế">Thừa Thiên Huế
                                                    <option value="Tiền Giang">Tiền Giang
                                                    <option value="Trà Vinh">Trà Vinh
                                                    <option value="Tuyên Quang">Tuyên Quang
                                                    <option value="Vĩnh Long">Vĩnh Long
                                                    <option value="Vĩnh Phúc">Vĩnh Phúc
                                                    <option value="Yên Bái">Yên Bái
                                                    <option value="Phú Yên">Phú Yên
                                                    <option value="Tp.Cần Thơ">Tp.Cần Thơ
                                                    <option value="Tp.Đà Nẵng">Tp.Đà Nẵng
                                                    <option value="Tp.Hải Phòng">Tp.Hải Phòng
                                                    <option value="Tp.Hà Nội">Tp.Hà Nội
                                                    <option value="TP  HCM">TP HCM
                                                    
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Thành Phố<span>*</span></label>
                                            <input type="text" name="address1" placeholder="" value="{{old('address1')}}">
                                            @error('address1')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Địa chỉ: Số nhà/Ngõ/Phường<span>*</span></label>
                                            <input type="text" name="address2" placeholder="Số nhà...." value="{{old('address2')}}">
                                            @error('address2')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Mã bưu điện</label>
                                            <input type="text" name="post_code" placeholder="" value="{{old('post_code')}}">
                                            @error('post_code')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                </div>
                                <!--/ End Form -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="order-details">
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>Tổng đơn giá</h2>
                                    <div class="content">
                                        <ul>
										    <li class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">Tổng đơn giá giỏ hàng<span>{{number_format(Helper::totalCartPrice())}}đ</span></li>
                                            <li class="shipping">
                                                Phí vận chuyển
                                                @if(count(Helper::shipping())>0 && Helper::cartCount()>0)
                                                    <select name="shipping" class="nice-select">
                                                        <option value="" disabled selected >Lựa chọn đơn vị vận chuyển</option>
                                                        @foreach(Helper::shipping() as $shipping)
                                                        <option value="{{$shipping->id}}" class="shippingOption" data-price="{{$shipping->price}}">{{$shipping->type}}: {{$shipping->price}}đ</option>
                                                        @endforeach
                                                    </select>
                                                @else 
                                                    <span>Miễn phí</span>
                                                @endif
                                            </li>
                                            
                                            @if(session('coupon'))
                                            <li class="coupon_price" data-price="{{session('coupon')['value']}}">Tiết kiệm<span>{{number_format(session('coupon')['value'])}}đ</span></li>
                                            @endif
                                            @php
                                                $total_amount=Helper::totalCartPrice();
                                                if(session('coupon')){
                                                    $total_amount=$total_amount-session('coupon')['value'];
                                                }
                                            @endphp
                                            @if(session('coupon'))
                                                <li class="last"  id="order_total_price">Tổng<span>{{number_format($total_amount)}}đ</span></li>
                                            @else
                                                <li class="last"  id="order_total_price">Tổng<span>{{number_format($total_amount)}}đ</span></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Order Widget -->
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>Thanh toán</h2>
                                    <div class="content">
                                        <div class="checkbox">
                                            {{-- <label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Check Payments</label> --}}
                                            <form-group>
                                                <input name="payment_method"  type="radio" value="cod"> <label> Thanh toán khi nhận hàng</label><br>
                                                <input name="payment_method"  type="radio" value="paypal"> <label>Thanh toán qua Internet Banking</label> 
                                            </form-group>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Order Widget -->
                                <!-- Payment Method Widget -->
                                <div class="single-widget payement">
                                    <div class="content">
                                        <img src="{{('backend/img/payment-method.png')}}" alt="#">
                                    </div>
                                </div>
                                <!--/ End Payment Method Widget -->
                                <!-- Button Widget -->

                                 

                                <div class="single-widget get-button">
                                    <div class="content">
                                        <div class="button">
                                            <button type="submit" class="btn">Tiến hành thanh toán</button>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Button Widget -->
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </section>
    <!--/ End Checkout -->
    
    <!-- Start Shop Services Area  -->
    @include('frontend.pages.service-aria')
    {{-- D:\Desktop\PHP1\htdocs\Advance-Ecommerce-in-laravel-7\resources\views\.blade.php --}}
    <!-- End Shop Services -->
    
    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        <div class="inner">
                            <h4>Newsletter</h4>
                            <p> Đăng kí để nhận sản phẩm mới và giảm <span>10%</span>lần mua đầu tiên</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Nhập email..." required="" type="email">
                                <button class="btn">Đăng kí</button>
                            </form>
                        </div>
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->
@endsection
@push('styles')
	<style>
		li.shipping{
			display: inline-flex;
			width: 100%;
			font-size: 14px;
		}
		li.shipping .input-group-icon {
			width: 100%;
			margin-left: 10px;
		}
		.input-group-icon .icon {
			position: absolute;
			left: 20px;
			top: 0;
			line-height: 40px;
			z-index: 3;
		}
		.form-select {
			height: 30px;
			width: 100%;
		}
		.form-select .nice-select {
			border: none;
			border-radius: 0px;
			height: 40px;
			background: #f6f6f6 !important;
			padding-left: 45px;
			padding-right: 40px;
			width: 100%;
		}
		.list li{
			margin-bottom:0 !important;
		}
		.list li:hover{
			background:#F7941D !important;
			color:white !important;
		}
		.form-select .nice-select::after {
			top: 14px;
		}

        label{
            font-weight: bold;
        }
      
	</style>
@endpush
@push('scripts')
	<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
	<script>
		$(document).ready(function() { $("select.select2").select2(); });
  		$('select.nice-select').niceSelect();
	</script>
	<script>
		function showMe(box){
			var checkbox=document.getElementById('shipping').style.display;
			// alert(checkbox);
			var vis= 'none';
			if(checkbox=="none"){
				vis='block';
			}
			if(checkbox=="block"){
				vis="none";
			}
			document.getElementById(box).style.display=vis;
		}
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') ); 
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0; 
				// alert(coupon);
				// $('#order_total_price span').text((subtotal + cost-coupon).toFixed(2)+'đ');
				$('#order_total_price span').text((subtotal + cost-coupon)+'đ');
			});

		});

	</script>

@endpush