<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Saoudi Group</title>

 		<!-- Google font -->
 		<link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome-webfont.ttf') }}"/>

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/Bootstrap1.min.css') }}"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/slick.css') }}"/>
 		<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}"/>
 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/nouislider.min.css') }}"/> 



 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">


 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}"/>


    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +000-00-00-00</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Sidi Aissa w. M'sila</a></li>
					</ul>
					<ul class="header-links pull-right newsletter-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">Toutes</option>
										<option value="1">Fournitures</option>
										<option value="2">Vêtements Indus.</option>
										<option value="3">Quincaillerie</option>
										<option value="4">Electroménager</option>
									</select>
									<input class="input" placeholder="Chercher ici">
									<button class="search-btn">Chercher</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Fournitures de bureau</a></li>
						<li><a href="#">Vêtements industriels</a></li>
						<li><a href="#">Quincaillerie</a></li>
						<li><a href="#">Electroménager</a></li>
						<li><a href="#">Construction</a></li>					
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
     <div class="container">
			<br>
			<div {{-- id="hot-deal"  --}}class="section"  style="background-image: url('Assets/img/back.jpg');background-size: cover">
			
				<div class="row">
				  <div class="col-5 col-md-3">
				  </div>
				  
				  <div class="col-7 col-md-5">
				  	    <div class="hot-deal">
							<p class="font-weight-bold">SAOUDI GROUP est active tant dans le secteur du génie civil que dans celui du bâtiment.</p>
							<a class="primary-btn cta-btn btn-lg btn-block" href="#">Entré</a>
						</div>
				 </div>
				 
				  <div class="col-6 col-md-4">				  
				 </div>
				</div>
			</div>
			</div>





		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">				
				<!-- shop -->
					<div class="col-xs-3">
						<div class="shop">
							<div class="shop-img">
								<img src="{{ asset('assets/img/fournitures-de-bureau.jpg') }}" alt=""> 
							</div>
							<div class="shop-body">
								<h3>Fourniture<br>de bureau</h3>
								<a href="#" class="cta-btn">Entré <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->


					<!-- shop -->
					<div class="col-xs-3">
						<div class="shop">
							<div class="shop-img">
								<img src="{{ asset('assets/img/Vetement_industr.jpg') }}" alt=""> 

							</div>
							<div class="shop-body">
								<h3>Vêtements<br>industriels</h3>
								<a href="#" class="cta-btn">Entré <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-xs-3">
						<div class="shop">
							<div class="shop-img">
								<img src="{{ asset('assets/img/quin1.jpg') }}" alt=""> 

							</div>
							<div class="shop-body">
								<h3>Quincaillerie</h3>
								<a href="#" class="cta-btn">Entré <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
					<!-- shop -->
					<div class="col-xs-3">
						<div class="shop">
							<div class="shop-img">
								<img src="{{ asset('assets/img/electromenagers.jpg') }}" alt=""> 

							</div>
							<div class="shop-body">
								<h3>Electroménager</h3>
								<a href="#" class="cta-btn">Entré <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Nouveaux Produits</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Bureautique</a></li>
									<li><a data-toggle="tab" href="#tab1">Vêtement industriels</a></li>
									<li><a data-toggle="tab" href="#tab1">Quincaillerie</a></li>
									<li><a data-toggle="tab" href="#tab1">Electroménager</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
									 @foreach($Datas as $data)
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="{{ url("Assets/img/".$data->id.".jpg") }}" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="#">{{$data->nom_article}}</a></h3>											
											</div>
										</div>
										<!-- /product -->
										@endforeach
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->



		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Sidi Aissa W M'sila</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+000-00-00-00</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Activités</h3>
								<ul class="footer-links">
									<li><a href="#">Fournitures de bureau</a></li>
									<li><a href="#">Vêtements industriels</a></li>
									<li><a href="#">Quincaillerie</a></li>
									<li><a href="#">Electroménager</a></li>
									<li><a href="#">Construction</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								Copyright All rights reserved 							
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script> 
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> 
		<script src="{{ asset('assets/js/slick.min.js') }}"></script> 
		<script src="{{ asset('assets/js/nouislider.min.js') }}"></script> 
		<script src="{{ asset('assets/js/jquery.zoom.min.js') }}"></script> 
		<script src="{{ asset('assets/js/main.js') }}"></script> 

	</body>
</html>
