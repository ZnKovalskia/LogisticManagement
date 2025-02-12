<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.kodesolution.com/2024/transfox-html/page-testimonial.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Feb 2025 07:07:26 GMT -->
<head>
<meta charset="utf-8">
<title>Transfox | Logistic & Transport Agency HTML Template | Testimonial Page</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]
[if lt IE 9]><script src="js/respond.js"></script><![endif]
</head>

<body>
<div class="page-wrapper">
  <!-- Preloader -->
  <div class="preloader"><span class="loader"></span></div>
    
  <!-- Main Header-->
	<header class="main-header header-style-one">
		<!-- Header Top -->
        @include('frontendLayouts.navbar')
		<!-- Header Top -->


		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
			<nav class="menu-box">
				<div class="upper-box">
					<div class="nav-logo"><a href="index-2.html"><img src="images/logo.png" alt="" title=""></a></div>
					<div class="close-btn"><i class="icon fa fa-times"></i></div>
				</div>
				<ul class="navigation clearfix">
					<!--Keep This Empty / Menu will come through Javascript-->
				</ul>
				<ul class="contact-list-one light">
					<li> <i class="icon lnr-icon-phone-handset"></i> <span class="title">Call Now</span>
						<div class="text"><a href="tel:+92880098670">+92 (8800) - 98670</a></div>
					</li>
					<li> <i class="icon lnr-icon-envelope1"></i> <span class="title">Send Email</span>
						<div class="text"><a href="https://html.kodesolution.com/cdn-cgi/l/email-protection#eb838e879bab8884869b8a8592c5888486"><span class="__cf_email__" data-cfemail="5c3439302c1c3f33312c3d3225723f3331">[email&#160;protected]</span></a></div>
					</li>
					<li> <i class="icon lnr-icon-map-marker"></i> <span class="title">Address</span>
						<div class="text">66 Broklyant, New York India 3269</div>
					</li>
				</ul>
				<ul class="social-links">
					<li><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
					<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</nav>
		</div>
		<!-- End Mobile Menu -->

		<!-- Header Search -->
		<div class="search-popup"> <span class="search-back-drop"></span>
			<button class="close-search"><span class="fa fa-times"></span></button>
			<div class="search-inner">
				<form method="post" action="https://html.kodesolution.com/2024/transfox-html/index.html">
					<div class="form-group">
						<input type="search" name="search-field" value="" placeholder="Search..." required="">
						<button type="submit"><i class="fa fa-search"></i></button>
					</div>
				</form>
			</div>
		</div>
		<!-- End Header Search -->

		<!-- Sticky Header  -->
		<div class="sticky-header">
			<div class="auto-container">
				<div class="inner-container">
					<!--Logo-->
					<div class="logo"> <a href="index-2.html" title=""><img src="images/logo-2.png" alt="" title=""></a> </div>

					<!--Right Col-->
					<div class="nav-outer">
						<!-- Main Menu -->
						<nav class="main-menu">
							<div class="navbar-collapse show collapse clearfix">
								<ul class="navigation clearfix">
									<!--Keep This Empty / Menu will come through Javascript-->
								</ul>
							</div>
						</nav>
						<!-- Main Menu End-->

						<!--Mobile Navigation Toggler-->
						<div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Sticky Menu -->
	</header>
  <!--End Main Header -->

	<!-- Start main-content -->
	<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer text-center">
				<h1 class="title">Testimonial</h1>
				<ul class="page-breadcrumb">
					<li><a href="{{route('home')}}">Home</a></li>
					<li>Testimonial</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- end main-content -->

  <!-- Testimonial Section -->
	<section class="testimonials-section style-three">
		<div class="bg bg-image" style="background-image: url(images/background/bg-testimonial2.png);"></div>
		<div class="float-image wow zoomInLeft animated animated"><img src="images/resource/float-4.png" alt="Image"></div>
		<div class="pattern-2 bounce-y"></div>
		<div class="auto-container">
			<div class="row">
				<div class="content-column col-xl-5">
					<div class="inner-column">
						<div class="icon-box">
							<span class="icon icon-quote2"></span>
						</div>
						<h2 class="title">Trusted by world leading companies</h2>
					</div>
				</div>
				<div class="testimonials-column col-xl-7">
					<div class="carousel-outer">
						<!-- Prject Carousel -->
						<div class="testimonial-carousel owl-carousel owl-theme">
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon icon-quote"></span>
									</div>
									<h5 class="name">Great Service</h5>
									<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
									<div class="text">Build and implement innovative, profitable and sustainable products and services that help</div>
								</div>
								<div class="founder-info">
									<figure class="image"><a href="#"><img src="images/resource/testi-thumb-1.jpg" alt=""></a></figure>
									<div class="content">
										<h5 class="name"><a href="#">Mark Wood</a></h5>
										<span class="designation">CEO, Transfox</span>
									</div>
								</div>
							</div>
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon icon-quote"></span>
									</div>
									<h5 class="name">Great Service</h5>
									<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
									<div class="text">Build and implement innovative, profitable and sustainable products and services that help</div>
								</div>
								<div class="founder-info">
									<figure class="image"><a href="#"><img src="images/resource/testi-thumb-2.jpg" alt=""></a></figure>
									<div class="content">
										<h5 class="name"><a href="#">Mark Wood</a></h5>
										<span class="designation">CEO, Transfox</span>
									</div>
								</div>
							</div>
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon icon-quote"></span>
									</div>
									<h5 class="name">Great Service</h5>
									<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
									<div class="text">Build and implement innovative, profitable and sustainable products and services that help</div>
								</div>
								<div class="founder-info">
									<figure class="image"><a href="#"><img src="images/resource/testi-thumb-3.jpg" alt=""></a></figure>
									<div class="content">
										<h5 class="name"><a href="#">Mark Wood</a></h5>
										<span class="designation">CEO, Transfox</span>
									</div>
								</div>
							</div>
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon icon-quote"></span>
									</div>
									<h5 class="name">Great Service</h5>
									<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
									<div class="text">Build and implement innovative, profitable and sustainable products and services that help</div>
								</div>
								<div class="founder-info">
									<figure class="image"><a href="#"><img src="images/resource/testi-thumb-1.jpg" alt=""></a></figure>
									<div class="content">
										<h5 class="name"><a href="#">Mark Wood</a></h5>
										<span class="designation">CEO, Transfox</span>
									</div>
								</div>
							</div>
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon icon-quote"></span>
									</div>
									<h5 class="name">Great Service</h5>
									<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
									<div class="text">Build and implement innovative, profitable and sustainable products and services that help</div>
								</div>
								<div class="founder-info">
									<figure class="image"><a href="#"><img src="images/resource/testi-thumb-2.jpg" alt=""></a></figure>
									<div class="content">
										<h5 class="name"><a href="#">Mark Wood</a></h5>
										<span class="designation">CEO, Transfox</span>
									</div>
								</div>
							</div>
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon icon-quote"></span>
									</div>
									<h5 class="name">Great Service</h5>
									<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
									<div class="text">Build and implement innovative, profitable and sustainable products and services that help</div>
								</div>
								<div class="founder-info">
									<figure class="image"><a href="#"><img src="images/resource/testi-thumb-3.jpg" alt=""></a></figure>
									<div class="content">
										<h5 class="name"><a href="#">Mark Wood</a></h5>
										<span class="designation">CEO, Transfox</span>
									</div>
								</div>
							</div>
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon icon-quote"></span>
									</div>
									<h5 class="name">Great Service</h5>
									<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
									<div class="text">Build and implement innovative, profitable and sustainable products and services that help</div>
								</div>
								<div class="founder-info">
									<figure class="image"><a href="#"><img src="images/resource/testi-thumb-1.jpg" alt=""></a></figure>
									<div class="content">
										<h5 class="name"><a href="#">Mark Wood</a></h5>
										<span class="designation">CEO, Transfox</span>
									</div>
								</div>
							</div>
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon icon-quote"></span>
									</div>
									<h5 class="name">Great Service</h5>
									<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
									<div class="text">Build and implement innovative, profitable and sustainable products and services that help</div>
								</div>
								<div class="founder-info">
									<figure class="image"><a href="#"><img src="images/resource/testi-thumb-2.jpg" alt=""></a></figure>
									<div class="content">
										<h5 class="name"><a href="#">Mark Wood</a></h5>
										<span class="designation">CEO, Transfox</span>
									</div>
								</div>
							</div>
							<!-- Testimonial Block -->
							<div class="testimonial-block">
								<div class="inner-box">
									<div class="icon-box">
										<span class="icon icon-quote"></span>
									</div>
									<h5 class="name">Great Service</h5>
									<div class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
									<div class="text">Build and implement innovative, profitable and sustainable products and services that help</div>
								</div>
								<div class="founder-info">
									<figure class="image"><a href="#"><img src="images/resource/testi-thumb-3.jpg" alt=""></a></figure>
									<div class="content">
										<h5 class="name"><a href="#">Mark Wood</a></h5>
										<span class="designation">CEO, Transfox</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  <!-- End Testimonial Section --> 

  <!-- Main Footer -->
  @include('frontendLayouts.footer')
  <!--End Main Footer -->

</div>
<!-- End Page Wrapper -->


<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/script.js"></script>
</body>

<!-- Mirrored from html.kodesolution.com/2024/transfox-html/page-testimonial.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Feb 2025 07:07:26 GMT -->
</html>
