<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Transfox | Logistic & Transport Agency | Team Page</title>
<!-- Stylesheets -->
<link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{ asset('css/style.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
@include('frontendLayouts.navbar')

<section class="page-title" style="background-image: url(images/background/page-title.jpg);">
		<div class="auto-container">
			<div class="title-outer text-center">
				<h1 class="title">Team</h1>
				<ul class="page-breadcrumb">
					<li><a href="{{route('home')}}">Home</a></li>
					<li>Team</li>
				</ul>
			</div>
		</div>
	</section>

  <!-- Team Section -->
	<section class="team-section pb-90">
		<div class="auto-container">
			<div class="outer-box m-0">
				<div class="row">
					@foreach ($staff as $item)
						<!-- Team block -->
						<div class="team-block col-lg-3 col-sm-6">
							<div class="inner-box">
								<div class="image-box">
									<figure class="image"><a href="page-team-details.html"><img src="{{ url('foto/' . $item->foto) }}" alt="Foto Staff"></a></figure>
								</div>
								<div class="info-box">
									<h4 class="name"><a href="page-team-details.html">{{ $item->nama_pegawai }}</a></h4>
									<span class="designation">{{ $item->role['nama_jabatan'] }}</span>
									<div class="social-links">
										<a href="#"><i class="fab fa-twitter"></i></a>
										<a href="#"><i class="fab fa-facebook-f"></i></a>
										<a href="#"><i class="fab fa-pinterest-p"></i></a>
										<a href="#"><i class="fab fa-instagram"></i></a>
									</div>
									<span class="share-icon fa fa-share-alt"></span>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
  <!-- End Team Section --> 

@include('frontendLayouts.footer')

</div>
<!-- End Page Wrapper -->


<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.js"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery.fancybox.js')}}"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/script.js"></script>

<style>
  .image-box img {
    width: 400px;
    height: 400px;
    object-fit: cover; /* Menjaga proporsi gambar tetap bagus */
  }
</style>
</body>

</html>
