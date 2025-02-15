<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.kodesolution.com/2024/transfox-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Feb 2025 07:04:02 GMT -->
<head>
<meta charset="utf-8">
<title>Transfox | MK TEAMS</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->

<link href="css/style.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

	<!-- Preloader -->
	<div class="preloader"></div>

	<!-- Main Header-->
	@include('frontendLayouts.navbar')
	<!--End Main Header -->

	<!--Banner Section-->
	<section class="banner-section" id="home">
		<div class="banner-carousel owl-carousel owl-theme">
			<!-- Slide Item -->
			<div class="slide-item">
				<div class="bg-image" style="background-image: url(images/main-slider/s1-1.jpg);"></div>
				<div class="shape-1 animate-2"></div>
				<div class="shape-2"></div>
				<div class="shape-3 animate-3"></div>
				<div class="shape-4 animate-4"></div>
				<div class="pattern-5 bounce-y"></div>
				<div class="auto-container">
					<div class="content-box">
					<div class="inner-content">
					<span class="sub-title animate-2"><span class="inner">Secure & Reliable shipping around the world</span></span>
					<h1 class="title animate-3">100% fastest <br />logistic & transport <br />solution</h1>
						</div>	

					</div>
				</div>
			</div>
			<!-- Slide Item -->
			<div class="slide-item">
				<div class="bg-image" style="background-image: url(images/background/Gudang.webp);"></div>
				<div class="shape-1 animate-2"></div>
				<div class="shape-2 wow fadeInRight" data-wow-delay="300ms"></div>
				<div class="shape-3 wow fadeInLeft" data-wow-delay="600ms"></div>
				<div class="shape-4 wow fadeInLeft" data-wow-delay="900ms"></div>
				<div class="pattern-5 bounce-y"></div>
				<div class="auto-container">
					<div class="content-box">
						<div class="inner-content">
						<span class="sub-title animate-1"><span class="inner">Secure & Reliable shipping around the world</span></span>
						<h1 class="title animate-2">100% fastest <br />logistic & transport <br />solution</h1>
							
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<!--End Banner Section -->
	
	<!-- Barang Section -->
	<section class="services-section">
		<div class="float-text">Services</div>
		<div class="auto-container">
			<div class="sec-title text-center">
				<span class="sub-title">Stok Barang</span>
				<h2 class="words-slide-up text-split">Produk dari perusahaan kami<br /> siap untuk diantar!</h2>
			</div>

			<div class="carousel-outer">
				<!-- Services Carousel -->
				<div class="services-carousel-three owl-carousel owl-theme">
					<!-- Service Block -->
					 @foreach ($barang as $item)
					<div class="service-block wow fadeInUp">
						<div class="inner-box">
							<div class="image-box">
								<figure class="image"><a href="#"><img src="{{ url('foto/' . $item->foto) }}" alt="Foto Barang"></a></figure>
							
							</div>
							<div class="content-box">
								<h4 class="title"><a href="#">{{ $item->nama_barang }}</a></h4>
								<div class="inner">
									<div class="text"><p>Produk Ini memiliki stok</p>{{ $item->quantity }}</div>
								</div>
								<a href="#" class="read-more"><i class="#"></i></a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<!-- End Barang Section-->

		<!-- Fun Fact Section -->
<section class="fun-fact-section" style="background-image: url(images/background/bg-fun-fact-1.jpg)">
    <div class="auto-container">
      <div class="fact-counter">
        <div class="row justify-content-center"> <!-- Menengahkan elemen -->

          <!-- Counter block-->
          <div class="counter-block col-lg-4 col-sm-6 d-flex justify-content-center wow fadeInUp">
            <div class="inner-box text-center">
              <div class="icon-box"><i class="icon flaticon-logistics"></i></div>
              <div class="content-box">
                <div class="count-box"><span class="count-text" data-speed="3000" data-stop="{{ $totalBarang }}">0</span>+</div>
                <div class="counter-title">Seluruh Stok Barang</div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
</section>
<!-- End Fun Fact Section -->




	<!-- Tampilan Testimonials Section -->
	@include('frontendLayouts.testimoni')
	<!-- End Tampilan Testimonials Section-->

	

	<!--Input Testimoni Details Start-->
	@include('frontendLayouts.input')
    <!--Input Testimoni Details End-->

    <!-- Map Section-->
    <section class="map-section py-0">
        <iframe  class="map w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.3356171339633!2d107.89057179999999!3d-7.2024967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68b17fffd28721%3A0xb57506be6f83442!2sSMKN%201%20Garut%20(SMEAN)!5e0!3m2!1sid!2sid!4v1739516911909!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!--End Map Section-->
	<!-- Clients Section -->
	<section class="clients-section">
		<div class="float-image wow zoomInLeft animated animated"><img src="images/resource/container1.jpg" alt="Image"></div>
		<div class="auto-container"> 
		  <!-- Sponsors Outer -->
		  <div class="sponsors-outer"> 
		    <!--clients carousel-->
		    <ul class="clients-carousel owl-carousel owl-theme disable-navs">
		      <li class="client-block"> <a href="#" class="image"> <img src="images/clients/1.png" alt="Image"> <img src="images/clients/1-1.png" alt="Image"> </a> </li>
		      <li class="client-block"> <a href="#" class="image"> <img src="images/clients/2.png" alt="Image"> <img src="images/clients/2-1.png" alt="Image"> </a> </li>
		      <li class="client-block"> <a href="#" class="image"> <img src="images/clients/3.png" alt="Image"> <img src="images/clients/3-1.png" alt="Image"> </a> </li>
		      <li class="client-block"> <a href="#" class="image"> <img src="images/clients/4.png" alt="Image"> <img src="images/clients/4-1.png" alt="Image"> </a> </li>
		      <li class="client-block"> <a href="#" class="image"> <img src="images/clients/5.png" alt="Image"> <img src="images/clients/5-1.png" alt="Image"> </a> </li>
		    </ul>
		  </div>
		</div>
	</section>
	<!--End Clients Section -->
	<!-- Main Footer -->
	@include('frontendLayouts.footer')
	<!--End Main Footer -->

</div><!-- End Page Wrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script> 
<script src="js/popper.min.js"></script>
<!--Revolution Slider-->
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>
<!--Revolution Slider-->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/script.js"></script>
<style>
	    .counter-block .count-box {
        text-align: center;
        font-size: 2rem;
        font-weight: bold;
        display: block;
    }
</style>
</body>



<!-- Mirrored from html.kodesolution.com/2024/transfox-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Feb 2025 07:05:13 GMT -->
</html>