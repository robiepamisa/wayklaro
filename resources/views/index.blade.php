@extends('layouts.main_layout')
@section('content')
<body class="animsition">

	<!-- Header -->
	@include('layouts.nav.header')

	<section class="slide1">
		<div class="wrap-slick1"><button class="arrow-slick1 prev-slick1 slick-arrow" style=""><i class="fa  fa-angle-left" aria-hidden="true"></i></button>
			<div class="slick1 slick-initialized slick-slider">
				<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 4560px;"><div class="item-slick1 item1-slick1 slick-slide" style="background-image: url(&quot;{{asset('assets/asset/images/products/2.jpg')}}&quot;); width: 1520px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" data-slick-index="0" aria-hidden="true" tabindex="-1">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						

						

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<!-- <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4" tabindex="-1">
								Shop Now
							</a> -->
						</div>
					</div>
				</div><div class="item-slick1 item2-slick1 slick-slide" style="background-image: url(&quot;{{asset('assets/asset/images/products/1.jpg')}}&quot;); width: 1520px; position: relative; left: -1520px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;" data-slick-index="1" aria-hidden="true" tabindex="-1">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						

						

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
							<!-- Button -->
							<!-- <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4" tabindex="-1">
								Shop Now
							</a> -->
						</div>
					</div>
				</div><div class="item-slick1 item3-slick1 slick-slide slick-current slick-active" style="background-image: url(&quot;{{asset('assets/asset/images/products/.jpg')}}&quot;); width: 1356px; position: relative; left: -3043px; top: 0px; z-index: 999; opacity: 1;" data-slick-index="2" aria-hidden="false" tabindex="0">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">

						<!-- <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37 rotateInUpRight visible-true" data-appear="rotateInUpRight">
							New arrivals
						</h2> -->

						<div class="wrap-btn-slide1 w-size1 animated visible-false rotateIn visible-true" data-appear="rotateIn">
							<!-- Button -->
							<!-- <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4" tabindex="0">
								Shop Now
							</a> -->
						</div>
					</div>
				</div></div></div>

				

				

			</div>
		<button class="arrow-slick1 next-slick1 slick-arrow" style=""><i class="fa  fa-angle-right" aria-hidden="true"></i></button></div>
	</section>
	

	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

						<ul class="p-b-54">
							<li class="p-t-4">
								<a href="#/all" class="s-text13 active1" onclick="javascript:categoryFilter('*')">
									All
								</a>
							</li>
							@foreach($category as $c)
							<li class="p-t-4">
								<a href="#/{{$c->category_name}}" class="s-text13 active1" onclick="javascript:categoryFilter('.{{$c->category_name}}')">
									{{$c->category_name}}
								</a>
							</li>
							@endforeach
						</ul>

						<!--  -->
						

						
					</div>
				</div>

				<div id="products" class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					<!--  -->
					<div class="flex-sb-m flex-w p-b-35">
						<div class="flex-w">
							<h3><b>Products</b></h3>
						</div>

						<span class="s-text8 p-t-5 p-b-5">
							Showing 1–12 of 16 results
						</span>
					</div>

					<!-- Product -->
					<div class="row grid">
						@if(isset($product))
						@foreach($product as $p)
						<div class="parentDiv col-sm-12 col-md-6 col-lg-4 p-b-50 {{$p->categories->category_name}}">
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative">
									<img class="imgPath" src="{{asset('images/products')}}/{{$p->image_path}}" alt="IMG-PRODUCT" style="height:360px !important">

									<div class="block2-overlay trans-0-4">
										<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
											<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
											<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
										</a>

										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<input type="hidden" class="proID" value="{{$p->id}}">
											<button class="cartButton flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												Add to Cart
											</button>
										</div>
									</div>
								</div>

								<div class="childrenDiv block2-txt p-t-20">
									<a href="product-detail.html" class="prodName block2-name dis-block s-text3 p-b-5">{{$p->name}}</a>
									<span class="block2-price m-text6 p-r-5">₱{{$p->price}}</span>
								</div>
							</div>
						</div>
						@endforeach
						@else
						0 Products
						@endif


						

					<!-- Pagination -->
					
				</div>
			</div>
		</div>
	</section>


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
@endsection



