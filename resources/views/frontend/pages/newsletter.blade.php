{{-- NEWSLETTER --}}

<div class="single-widget newsletter">
    <h3 class="title">BẢN TIN</h3>
    <div class="letter-inner">
        <h5>Đăng kí và nhận <br>thông tin sản phẩm nhất.</h5>
        <form action="{{route('subscribe')}}" method="POST">
            @csrf
            <div class="form-inner">
                <input type="email" name="email" placeholder="Nhập email">
                <button type="submit" class="btn mt-2">Xác nhận</button>
            </div>
        </form>
    </div>
</div>