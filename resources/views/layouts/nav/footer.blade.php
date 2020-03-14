<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					GET IN TOUCH
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>

					<div class="flex-m p-t-30">
						<a href="https://web.facebook.com/groups/allianceinmotionglobalinc/" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
						<a href="https://www.instagram.com/explore/locations/561955360641490/alliance-in-motion-global-incorporated/?hl=en" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
						<a href="https://www.pinterest.ph/uaecompany/alliance-in-motion-global-inc/" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
						<a href="https://www.youtube.com/user/aimglobalvids" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
					</div>
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					Categories
				</h4>

				<ul>
					@foreach($category as $c)
					<li class="p-b-9">
						<a href="#{{$c->category_name}}" class="s-text7">
							{{$c->category_name}}
						</a>
					</li>
					@endforeach
				</ul>
			</div>

			
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="{{asset('assets/asset/images/icons/paypal.png')}}" alt="IMG-PAYPAL">
			</a>

			

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</div>
		</div>
	</footer>