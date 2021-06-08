<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{asset('frontend/img/favicon.png')}}" type="image/png">
	<title>About Us</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/lightbox/simpleLightbox.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/nice-select/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/vendors/animate-css/animate.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<img class="logo-1" src="{{asset('frontend/img/logo.png')}}" alt="">
						<img class="logo-2" src="{{asset('frontend/img/logo-2.png')}}" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					 aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link" href="/">Home</a></li>
							<li class="nav-item active"><a class="nav-link" href="/about-us">About</a></li>
							<li class="nav-item"><a class="nav-link" href="menu.html">Menu</a></li>
							<li class="nav-item"><a class="nav-link" href="book-table.html">book a table</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
									<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
								</ul>
							</li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
									<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
								</ul>
							</li>
							<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================Header Menu Area =================-->

	<!--================ Banner Area =================-->
	<section class="banner_area">
		<div class="banner_inner d-flex align-items-center">
			<div class="container">
				<div class="banner_content text-center">
					<h1>About Us</h1>
					<div class="page_link">
						<a href="/">Home</a>
						<a href="/about-us">About Us</a>
					</div>
				</div>
			</div>
			<div class="shape shape1"></div>
			<div class="shape shape2"></div>
			<div class="shape shape3"></div>
			<div class="shape shape4"></div>
			<div class="shape shape5"></div>
			<div class="shape shape6"></div>
			<div class="shape shape7"></div>
		</div>
	</section>
	<!--================End Banner Area =================-->

	<!--================Story Area =================-->
	<section class="about_story_area section_gap">
		<div class="container">
			<div class="row story_inner">
				<div class="col-lg-6">
					<div class="story_text">
						<h2>About Our Story</h2>
						<hr>
						<p>Bringing a mouthful of delicious goodness in the most appealing way possible is what we keep in mind when we make our dishes. It all started with our founder, Maharaj, who thought of it and wanted to make things possible. Starting from the bottom with a tiny place, few dedicated workers and now taking orders from the mass people, we have grown through it. Keeping in pace with the recent craze of people in pastry, to the good old baked wholesome breads, we have it all in pastry emporium –a place that is sure to keep your hunger pangs at bay.</p>
						
						<a class="main_btn" href="/">Go To Home Page</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="story_img">
						<img class="img-fluid" src="{{asset('frontend/img/story/story-1.jpg')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Story Area =================-->

	<!--================Member Area =================-->
	<section class="testimonials_area section_gap">
		<div class="container">
			<div class="testi_slider owl-carousel">
				<div class="item">
					<div class="row">
						<div class="col-lg-4">
							<img src="{{asset('frontend/img/testimonials/keka.jpg')}}" alt="">
						</div>
						<div class="col-lg-8">
							<div class="testi_text">
								<h4>Keka Ferdousi</h4>
								<h5>Culinary Masterchef</h5>
								<p>“Cooking isn't easy. In order to become a good cook, one has to possess certain skills like being economical, understanding different food types, measurement and finally, being organised. For making pastry and sweets the job requires more finesse and focus.”


								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-lg-4">
							<img src="{{asset('frontend/img/testimonials/tony_khan.jpg')}}" alt="">
						</div>
						<div class="col-lg-8">
							<div class="testi_text">
								<h4>Tony Khan</h4>
								<h5>Nutritionist, Headchef of Radisson</h5>
								<p>“Desert is like a feel-good song and the best one make you dance"


								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="row">
						<div class="col-lg-4">
							<img src="{{asset('frontend/img/testimonials/kabir.jpg')}}" alt="">
						</div>
						<div class="col-lg-8">
							<div class="testi_text">
								<h4>Siddika Kabir</h4>
								<h5>Nutritionist, Cook Book Writer</h5>
								<p>"The biggest challenge of being a pastry chef is that, unlike other types of chefs, you can't throw things together at a farmer's market. When you're working with baking powder and a formula, you have to be exact. If not, things can go wrong.”</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Member Area =================-->

	<!--================ start footer Area  =================-->
	<footer class="footer-area p_120">
		<div class="container">
			<div class="row">
				<div class="col-lg-2  col-md-6 col-sm-6">
					<div class="single-footer-widget tp_widgets">
						<h6 class="footer_title">Top Products</h6>
						<ul class="list">
							<li><a href="#">Managed Website</a></li>
							<li><a href="#">Manage Reputation</a></li>
							<li><a href="#">Power Tools</a></li>
							<li><a href="#">Marketing Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2  col-md-6 col-sm-6">
					<div class="single-footer-widget tp_widgets">
						<h6 class="footer_title">Quick Links</h6>
						<ul class="list">
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2  col-md-6 col-sm-6">
					<div class="single-footer-widget tp_widgets">
						<h6 class="footer_title">Features</h6>
						<ul class="list">
							<li><a href="#">Jobs</a></li>
							<li><a href="#">Brand Assets</a></li>
							<li><a href="#">Investor Relations</a></li>
							<li><a href="#">Terms of Service</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2  col-md-6 col-sm-6">
					<div class="single-footer-widget tp_widgets">
						<h6 class="footer_title">Resources</h6>
						<ul class="list">
							<li><a href="#">Guides</a></li>
							<li><a href="#">Research</a></li>
							<li><a href="#">Experts</a></li>
							<li><a href="#">Agencies</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<aside class="f_widget news_widget">
						<div class="f_title">
							<h3 class="footer_title">Newsletter</h3>
						</div>
						<p>Stay updated with our latest trends</p>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<button class="btn sub-btn"><span class="lnr lnr-arrow-right"></span></button>
								</div>
								<div class="mt-10 info"></div>
							</form>
						</div>
					</aside>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-4 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('frontend/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('frontend/js/popper.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('frontend/js/stellar.js')}}"></script>
	<script src="{{asset('frontend/vendors/lightbox/simpleLightbox.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/isotope/isotope-min.js')}}"></script>
	<script src="{{asset('frontend/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/counter-up/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/counter-up/jquery.counterup.js')}}"></script>
	<script src="{{asset('frontend/js/mail-script.js')}}"></script>
	<script src="{{asset('frontend/vendors/popup/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('frontend/vendors/scroll/jquery.mCustomScrollbar.js')}}"></script>
	<script src="{{asset('frontend/vendors/swiper/js/swiper.min.js')}}"></script>
	<script src="{{asset('frontend/js/theme.js')}}"></script>
</body>

</html>