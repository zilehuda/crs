<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Auto Club</title>

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />

		<link href="{{ asset('css/master.css') }}" rel="stylesheet">

		<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="{{ asset('assets/switcher/css/switcher.css') }}" media="all" />
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body class="m-index" data-scrolling-animations="true" data-equal-height=".b-auto__main-item">

		<!-- Loader -->
		<div id="page-preloader"><span class="spinner"></span></div>
		<!-- Loader end -->
		<header class="b-topBar wow slideInDown" data-wow-delay="0.7s">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="b-topBar__addr">
							<span class="fa fa-map-marker"></span>
							202 W 7TH ST, LOS ANGELES, CA 90014
						</div>
					</div>
					<div class="col-md-2 col-xs-6">
						<div class="b-topBar__tel">
							<span class="fa fa-phone"></span>
							1-800- 624-5462
						</div>
					</div>
					<div class="col-md-6 col-xs-6">
						<nav class="b-topBar__nav">
							<ul>
								@if (Auth::guest())
								<li><a href="#">REGISTER</a></li>
								<li><a href="{{ route('owner.login') }}">LOGIN AS OWNER</a></li>
								<li><a href="{{ route('client.login') }}">LOGIN AS CLIENT</a></li>
								@elseif (Auth::guard('owner')->check() || Auth::guard('client')->check())
								<li><a href="{{ route('logout') }}">LOGOUT</a></li>
								<li><a href="#">{{ Auth::user()->fname }}</a></li>

								@endif
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header><!--b-topBar-->

		<nav class="b-nav">
			<div class="container">
				<div class="row">
					<div class="col-sm-3 col-xs-4">
						<div class="b-nav__logo wow slideInLeft" data-wow-delay="0.3s">
							<h3><a href="home.html">Auto<span>Club</span></a></h3>
							<h2><a href="home.html">AUTO DEALER TEMPLATE</a></h2>
						</div>
					</div>
					<div class="col-sm-9 col-xs-8">
						<div class="b-nav__list wow slideInRight" data-wow-delay="0.3s">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div class="collapse navbar-collapse navbar-main-slide" id="nav">
								<ul class="navbar-nav-menu">
									@if (Auth::guest())
									<li><a href="login">Home</a></li>
									<li><a href="login">Available Cars</a></li>
									<li><a href="login">Comapre</a></li>
									<li><a href="submit1.html">About</a></li>
									<li><a href="contacts.html">Contact</a></li>
									@elseif(Auth::guard('client')->check())
									<li><a href="login">Available Cars</a></li>
									<li><a href="login">My Status</a></li>
									<li><a href="submit1.html">My Schedule</a></li>
									<li><a href="login">Comapre</a></li>
									<li><a href="contacts.html">Contact</a></li>
									@elseif(Auth::guard('owner')->check())
									<li><a href="login">My Cars</a></li>
									<li><a href="login">Add New Car</a></li>
									<li><a href="login">Car Status</a></li>
									@endif
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav><!--b-nav-->

		@yield('content')

		<div class="b-features">
			<div class="container">
				<div class="row">
					<div class="col-md-9 col-md-offset-3 col-xs-6 col-xs-offset-6">
						<ul class="b-features__items">
							<li class="wow zoomInUp" data-wow-delay="0.3s" data-wow-offset="100">Low Prices, No Haggling</li>
							<li class="wow zoomInUp" data-wow-delay="0.3s" data-wow-offset="100">Largest Car Dealership</li>
							<li class="wow zoomInUp" data-wow-delay="0.3s" data-wow-offset="100">Multipoint Safety Check</li>
						</ul>
					</div>
				</div>
			</div>
		</div><!--b-features-->

		<div class="b-info">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xs-6">
						<aside class="b-info__aside wow zoomInLeft" data-wow-delay="0.3s">
							<article class="b-info__aside-article">
								<h3>OPENING HOURS</h3>
								<div class="b-info__aside-article-item">
									<h6>Sales Department</h6>
									<p>Mon-Sat : 8:00am - 5:00pm<br />
										Sunday is closed</p>
								</div>
								<div class="b-info__aside-article-item">
									<h6>Service Department</h6>
									<p>Mon-Sat : 8:00am - 5:00pm<br />
										Sunday is closed</p>
								</div>
							</article>
							<article class="b-info__aside-article">
								<h3>About us</h3>
								<p>Vestibulum varius od lio eget conseq
									uat blandit, lorem auglue comm lodo
									nisl non ultricies lectus nibh mas lsa
									Duis scelerisque aliquet. Ante donec
									libero pede porttitor dacu msan esct
									venenatis quis.</p>
							</article>
							<a href="about.html" class="btn m-btn">Read More<span class="fa fa-angle-right"></span></a>
						</aside>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="b-info__latest">
							<h3>LATEST AUTOS</h3>
							<div class="b-info__latest-article wow zoomInUp" data-wow-delay="0.3s">
								<div class="b-info__latest-article-photo m-audi"></div>
								<div class="b-info__latest-article-info">
									<h6><a href="detail.html">MERCEDES-AMG GT S</a></h6>
									<p><span class="fa fa-tachometer"></span> 35,000 KM</p>
								</div>
							</div>
							<div class="b-info__latest-article wow zoomInUp" data-wow-delay="0.3s">
								<div class="b-info__latest-article-photo m-audiSpyder"></div>
								<div class="b-info__latest-article-info">
									<h6><a href="#">AUDI R8 SPYDER V-8</a></h6>
									<p><span class="fa fa-tachometer"></span> 35,000 KM</p>
								</div>
							</div>
							<div class="b-info__latest-article wow zoomInUp" data-wow-delay="0.3s">
								<div class="b-info__latest-article-photo m-aston"></div>
								<div class="b-info__latest-article-info">
									<h6><a href="#">ASTON MARTIN VANTAGE</a></h6>
									<p><span class="fa fa-tachometer"></span> 35,000 KM</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="b-info__twitter">
							<h3>from twitter</h3>
							<div class="b-info__twitter-article wow zoomInUp" data-wow-delay="0.3s">
								<div class="b-info__twitter-article-icon"><span class="fa fa-twitter"></span></div>
								<div class="b-info__twitter-article-content">
									<p>Duis scelerisque aliquet ante donec libero pede porttitor dacu</p>
									<span>20 minutes ago</span>
								</div>
							</div>
							<div class="b-info__twitter-article wow zoomInUp" data-wow-delay="0.3s">
								<div class="b-info__twitter-article-icon"><span class="fa fa-twitter"></span></div>
								<div class="b-info__twitter-article-content">
									<p>Duis scelerisque aliquet ante donec libero pede porttitor dacu</p>
									<span>20 minutes ago</span>
								</div>
							</div>
							<div class="b-info__twitter-article wow zoomInUp" data-wow-delay="0.3s">
								<div class="b-info__twitter-article-icon"><span class="fa fa-twitter"></span></div>
								<div class="b-info__twitter-article-content">
									<p>Duis scelerisque aliquet ante donec libero pede porttitor dacu</p>
									<span>20 minutes ago</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<address class="b-info__contacts wow zoomInUp" data-wow-delay="0.3s">
							<p>contact us</p>
							<div class="b-info__contacts-item">
								<span class="fa fa-map-marker"></span>
								<em>202 W 7th St, Suite 233 Los Angeles,
									California 90014 USA</em>
							</div>
							<div class="b-info__contacts-item">
								<span class="fa fa-phone"></span>
								<em>Phone:  1-800- 624-5462</em>
							</div>
							<div class="b-info__contacts-item">
								<span class="fa fa-fax"></span>
								<em>FAX:  1-800- 624-5462</em>
							</div>
							<div class="b-info__contacts-item">
								<span class="fa fa-envelope"></span>
								<em>Email:  info@domain.com</em>
							</div>
						</address>
						<address class="b-info__map">
							<a href="contacts.html">Open Location Map</a>
						</address>
					</div>
				</div>
			</div>
		</div><!--b-info-->

		<footer class="b-footer">
			<a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a>
			<div class="container">
				<div class="row">
					<div class="col-xs-4">
						<div class="b-footer__company wow fadeInLeft" data-wow-delay="0.3s">
							<div class="b-nav__logo">
								<h3><a href="home.html">Auto<span>Club</span></a></h3>
							</div>
							<p>&copy; 2015 Designed by Templines &amp; Powered by WordPress.</p>
						</div>
					</div>
					<div class="col-xs-8">
						<div class="b-footer__content wow fadeInRight" data-wow-delay="0.3s">
							<div class="b-footer__content-social">
								<a href="#"><span class="fa fa-facebook-square"></span></a>
								<a href="#"><span class="fa fa-twitter-square"></span></a>
								<a href="#"><span class="fa fa-google-plus-square"></span></a>
								<a href="#"><span class="fa fa-instagram"></span></a>
								<a href="#"><span class="fa fa-youtube-square"></span></a>
								<a href="#"><span class="fa fa-skype"></span></a>
							</div>
							<nav class="b-footer__content-nav">
								<ul>
									<li><a href="home.html">Home</a></li>
									<li><a href="404.html">Pages</a></li>
									<li><a href="listings.html">Inventory</a></li>
									<li><a href="about.html">About</a></li>
									<li><a href="404.html">Services</a></li>
									<li><a href="blog.html">Blog</a></li>
									<li><a href="listTable.html">Shop</a></li>
									<li><a href="contacts.html">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer><!--b-footer-->
		<!--Main-->
		<script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
		<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/modernizr.custom.js') }}"></script>

		<script src="{{ asset('assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
		<script src="{{ asset('js/waypoints.min.js') }}"></script>
		<script src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
		<script src="{{ asset('js/classie.js') }}"></script>

		<!--Switcher-->
		<script src="{{ asset('assets/switcher/js/switcher.js') }}"></script>
		<!--Owl Carousel-->
		<script src="{{ asset('assets/owl-carousel/owl.carousel.min.js') }}"></script>
		<!--bxSlider-->
		<script src="{{ asset('assets/bxslider/jquery.bxslider.js') }}"></script>
		<!-- jQuery UI Slider -->
		<script src="{{ asset('assets/slider/jquery.ui-slider.js') }}"></script>

		<!--Theme-->
		<script src="{{ asset('js/jquery.smooth-scroll.js') }}"></script>
		<script src="{{ asset('js/wow.min.js') }}"></script>
		<script src="{{ asset('js/jquery.placeholder.min.js') }}"></script>
		<script src="{{ asset('js/theme.js') }}"></script>
		<script src="{{ asset('js/jquery.js') }}"></script>
		<script src="{{ asset('js/jquery.validate.js') }}"></script>
		@yield('js')

	</body>
</html>
