<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			

			<div class="wrap_header">
				<!-- Logo -->
				<a href="{{url('/')}}" class="logo">
					<img src="{{asset('assets/asset/images/icons/logo.png')}}" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="{{url('/')}}">Home</a>
								
							</li>

							<li>
								<a href="#products">Shop</a>
							</li>
							<li>
								<a href="{{url('/about')}}">About</a>
							</li>

							
							@auth
							@if(Auth::user()->user_role==1)
							<li>	
								<a href="{{url('/admin')}}">Admin</a>
							</li>
							@endif
							@endauth

						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">
                
                    <div class="header-wrapicon2">
						<img src="{{asset('assets/asset/images/icons/icon-header-01.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<!-- Header cart noti -->
                        @auth
							{{Auth::user()->name}}
						<div class="header-cart header-dropdown">
							
							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{Route('logout')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4"
									onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
									>Logout</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
								</div>
							</div>
						</div>

							

                        @else
						<div class="header-cart header-dropdown">
							
							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{Route('register')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Register
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{Route('login')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Login
									</a>
								</div>
							</div>
						</div>
                        @endauth
					</div>         
					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="{{asset('assets/asset/images/icons/icon-header-02.png')}}" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti" id="cartTotalProduct" >@if(isset($cart_count)){{$cart_count}}@elseif(isset($count)) {{$count}} @else 0 @endif</span>
						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<?php $totalAmount = 0; ?>
						@if(isset($cart))
						@foreach($cart as $c)

							<ul class="header-cart-wrapitem" id="cartItem">
								 <li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="{{asset('images/products')}}/{{$c->product->image_path}}" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											{{$c->product->name}}
										</a>

										<span class="header-cart-item-info">
											{{$c->qty}} x ₱{{$c->product->price}}
										</span>
									</div>
								</li>
								<!-- <li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>  -->
							</ul>

							<?php
							
							$totalAmount = $totalAmount + $c->qty* $c->product->price; ?>
							@endforeach
							@endif


							<div class="header-cart-total" id="cartTotalAmt">
								Total: ₱<?php echo $totalAmount; ?>
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{url('/viewCart')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
