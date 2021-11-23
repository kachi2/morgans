<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Morgans Consulting</title>
        <link rel="shortcut icon" href="{{asset('/assets/images/favicon.png')}}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/normalize.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/icomoon.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/transitions.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/prettyPhoto.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/owl.theme.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/color.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/responsive.css')}}">
	<script src="{{asset('/assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>

<body class="tg-home tg-homeversion">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar tg-bglight tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<ul class="tg-topcontactinfo">
								
								<li>
									<i class="fa fa-envelope-o"></i>
									<span><a href="mailto:enquiries@morgansconsulting.ng">enquiries@morgansconsulting.ng </a></span>
								</li>
								<li>
									<i class="fa fa-map-marker"></i>
									<address>2nd Floor, 1 Adeola Adeoye Street,Toyin Street,Ikeja, Lagos Nigeria</address>
								</li>
							</ul>
							<nav class="tg-addnav tg-themecolor">
								<ul>
									<li><a href="https://portrec.co.uk">careers</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-navigationarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<strong class="tg-logo" style="margin:30px">
								<a href="{{route('index')}}"><img   src="{{asset('/assets/images/logos.png')}}" alt="logo"></a>
							</strong>
							<nav id="tg-nav" class="tg-nav">
								<div class="navbar-header">
									<button type="button" class="tg-btnnav navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
									<ul>
										<li class="tg-active tg-hasdropdown">
											<a href="{{route('index')}}">Home</a>
										</li>
										<li class="menu-item-has-mega-menu">
											<a href="#">About Us</a>
										</li>
										<li class="tg-hasdropdown">
											<a href="#">Services</a>
										</li>
										<li class="tg-hasdropdown">
											<a href="#">Clients</a>
										</li>
										<li class="tg-hasdropdown">
											<a href="#">Our Team</a>
										</li>
										<li><a href="gallery.html">Contact Us</a></li>
										<li class="tg-hasdropdown">
											<a href="#">News</a>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>

@yield('content')
        <footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-footertopbar tg-bglight tg-bgimage tg-shadow">
				<div class="container">
					<div class="row">
						<div class="tg-signuparea">
							<div class="col-md-3 col-sm-12 col-xs-12">
								<span class="tg-formtitle">signup for latest updates!</span>
							</div>
							<div class="col-md-9 col-sm-12 col-xs-12">
								<div class="row">
									<form class="tg-formsignup">
										<fieldset>
											<div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
												<div class="form-group">
													<input type="text" name="name" class="form-control" placeholder="Your Name">
												</div>
											</div>
											<div class="col-lg-5 col-md-4 col-sm-4 col-xs-12">
												<div class="form-group">
													<input type="email" name="email" class="form-control" placeholder="Your Email">
												</div>
											</div>
											<div class="col-lg-2 col-md-4 col-sm-4 col-xs-12">
												<div class="form-group">
													<button type="submit" class="tg-btn"><span>signup</span></button>
												</div>
											</div>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footermiddlearea">
				<div class="container">
					<div class="row">
						<div class="tg-footerwidgets">
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="tg-widget tg-widgetinfo">
									<div><img src="{{asset('/assets/images/logo6.png')}}" alt="image description"></div> <br>
									<h4>Head office</h4>
									<ul class="tg-contactinfo">
										<li>
											<i class="fa fa-home"></i>
											<address>2nd Floor, 1 Adeola Adeoye Street,Toyin Street,Ikeja, Lagos Nigeria</address>
										</li>
										<li>
											<i class="fa fa-envelope-o"></i>
											<span><a href="mailto:enquiries@morgansconsulting.ng">enquiries@morgansconsulting.ng</a></span>
										</li>
										<li>
											<i class="fa fa-phone"></i>
											<span>+44 123 456 788 - 9</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="tg-widget tg-widgetusefulllinks">
									<div class="tg-widgettitle"><h3>useful links</h3></div>
									<ul>
										<li><a href="#">Home</a></li>
										<li><a href="#">About Us</a></li>
										<li><a href="#">Services</a></li>
										<li><a href="#">Clients</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="tg-widget tg-widgetflicker">
									<div class="tg-widgettitle"><h3>Social Widget</h3></div>
									<ul>
										<li><figure><a href="#"><img src="{{asset('/assets/images/thumbs/img-03.jpg')}}" alt="image description"></a></figure></li>
										<li><figure><a href="#"><img src="{{asset('/assets/images/thumbs/img-04.jpg')}}" alt="image description"></a></figure></li>
										<li><figure><a href="#"><img src="{{asset('/assets/images/thumbs/img-05.jpg')}}" alt="image description"></a></figure></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbottombar">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<span class="tg-copyright">&copy; {{date('Y')}} | All Rights Reserved</span>
							<ul class="tg-socialicons">
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<script src="{{asset('/assets/js/vendor/jquery-library.js')}}"></script>
	<script src="{{asset('/assets/js/vendor/bootstrap.min.js')}}"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="{{asset('/assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('/assets/js/jquery.svgInject.js')}}"></script>
	<script src="{{asset('/assets/js/isotope.pkgd.js')}}"></script>
	<script src="{{asset('/assets/js/chartsloader.js')}}"></script>
	<script src="{{asset('/assets/js/prettyPhoto.js')}}"></script>
	<script src="{{asset('/assets/js/parallax.js')}}"></script>
	<script src="{{asset('/assets/js/countTo.js')}}"></script>
	<script src="{{asset('/assets/js/appear.js')}}"></script>
	<script src="{{asset('/assets/js/gmap3.js')}}"></script>
	<script src="{{asset('/assets/js/main.js')}}"></script>
</body>
</html>