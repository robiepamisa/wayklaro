<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('assets/asset/images/icons/favicon.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/asset/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/asset/fonts/themify/themify-icons.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/asset/fonts/elegant-font/html-css/style.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/asset/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/asset/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/asset/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/asset/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/asset/vendor/slick/slick.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/asset/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/asset/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body class="animsition" style="animation-duration: 1500ms; opacity: 1;">


	<!-- Header -->
	@include('layouts.nav.header')

    <!-- Title Page -->
	<div class="container bgwhite p-t-35 p-b-80">
      <div class="flex-w flex-sb">
        <div class="w-size13 p-t-30 respon5">
          <div class="wrap-slick3 flex-sb flex-w">
            <div class="wrap-slick3-dots"><ul class="slick3-dots" role="tablist"><li class="slick-active" role="presentation"><img src="{{asset('images/products')}}/{{$product->image_path}}"><div class="slick3-dot-overlay"></div></li></ul></div>

            <div class="slick3 slick-initialized slick-slider slick-dotted">
              <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 501px;"><div class="item-slick3 slick-slide slick-current slick-active" data-thumb="{{asset('images/products')}}/{{$product->image_path}}" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10" style="width: 501px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                <div class="wrap-pic-w">
                  <img src="{{asset('images/products')}}/{{$product->image_path}}" alt="IMG-PRODUCT">
                </div>
              </div></div></div>
            </div>
          </div>
        </div>

        <div class="w-size14 p-t-30 respon5">
          <h4 class="product-detail-name m-text16 p-b-13">
            {{$product->name}}
          </h4>

          <span class="priceTag m-text17">
          ₱{{$product->price}}
          </span>

          <p class="description s-text8 p-t-10">
            {{$product->description}}
          </p>

          <!--  -->
          

          <!--  -->
          

          
        </div>
      </div>
    </div>

	<!-- Cart -->
	

	<!-- Footer -->
	@include('layouts.nav.footer')



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('assets/asset/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('assets/asset/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="{{asset('assets/asset/vendor/bootstrap/js/popper.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/asset/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script type="text/javascript" src="{{asset('assets/asset/vendor/select2/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/asset/js/custom.js')}}"></script>
    
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
    </script>
    <script type="text/javascript">
		$('.cartButton').each(function(){
			var nameProduct = $(this).parent().parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>
<!--===============================================================================================-->
	<script src="{{asset('assets/asset/js/main.js')}}"></script>
<script src="https://www.paypal.com/sdk/js?client-id=ASfyTOwzzMiw1fDXPHlU1P62udhw8AfRH6aU3Jt9O_MvNhLICEC0qNEj1OLqt5rvJS8BnqyBq3ClWaR1"></script>
	<script>paypal.Buttons().render('#paypalButton');</script>
</body>
</html>
