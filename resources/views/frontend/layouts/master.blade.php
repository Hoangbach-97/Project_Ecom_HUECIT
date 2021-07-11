<!DOCTYPE html>
<html lang="vi-VN">
<head>
	@include('frontend.layouts.head')	
</head>
<body class="js">
	<div class="container-fluid">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	@include('frontend.layouts.notification')
	<!-- Header -->
	@include('frontend.layouts.header')
	<!--/ End Header -->
	@yield('main-content')
	
	@include('frontend.layouts.footer')
</div>

<script>
	// Blink khuyến mãi
	   setInterval(() => {
            var blink = document.getElementById("promotional");
            // blink.style.color="red";
            blink.style.color=(blink.style.color == 'red' ? 'white' : 'red');

        }, 500);

		// Blink icon khuyen mai
		setInterval(() => {
            var blink = document.getElementById("promotional1");
            // blink.style.color="red";
            blink.style.visibility=(blink.style.visibility == 'hidden' ? '' : 'hidden');

        }, 500);

		// Blink IOT labels
		setInterval(() => {
            var blink = document.getElementById("iot");
            // blink.style.color="red";
            blink.style.visibility=(blink.style.visibility == 'hidden' ? '' : 'hidden');

        }, 500);

		// new-price BLINK

		setInterval(() => {
            var blink = document.getElementById("new-price");
            // blink.style.color="red";
            blink.style.backgroundColor=(blink.style.backgroundColor == 'pink' ? 'green' : 'pink');

        }, 700);

</script>
{{-- <script type="text/javascript" src="./js-zoom/jquery.js"></script>
<script type="text/javascript" src="./js-zoom/script.js"></script>
<script type="text/javascript" src="./js-zoom/zoom.js"></script> --}}

</body>
</html>