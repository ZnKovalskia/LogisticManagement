<header class="main-header header-style-one">
	    <!-- Header Top -->
	    <div class="header-top">
	      <div class="bg-lines"></div>
	      <div class="inner-container">
	        <div class="top-left">
	          <ul class="social-icon-one light">
	            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
	            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
	            <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
	          </ul>
	        </div>
	        <div class="top-right">
	          <!-- Info List -->
	          <ul class="list-style-one light">
	            <li><i class="far fa-clock"></i> Mon - Fri: 09.00am - 10.00pm</li>
	            <li><i class="fa fa-map-marker-alt"></i> Garut, Jawa Barat | Indonesia</li>
	            <li><i class="fa-regular fa-user"></i> <a href="{{ route('dashboard') }}">Admin Only</span></a></li>
	          </ul>
	        </div>
	      </div>
	    </div>
	    <!-- Header Top -->

	    <div class="header-lower style-two">
	      <!-- Main box -->
	      <div class="main-box">
	        <div class="logo-box">
	          <div class="logo"><a href="index-2.html"><img src="images/logo-2.png" alt="Logo" title="Transtex"></a></div>
	        </div>

	        <!--Nav Box-->
	        <div class="nav-outer">
	          <nav class="nav main-menu">
	            <ul class="navigation">
	              <li class=""><a href="#home">Home</a></li>
				  <li class=""><a href="{{route('team')}}">Team</a></li>
					<li><a href="#testimonial">Testimonial</a></li>
	              <li><a href="#contact">Contact</a></li>
	            </ul>
	          </nav>
	        </div>
	        <!-- Main Menu End-->

	        <!-- Outer Box -->
	        <div class="outer-box">
	          <!-- Header Search -->
	          <div class="header-search">
	            <form method="post" action="https://html.kodesolution.com/2024/transfox-html/index.html">
	              <div class="form-group">
	                <input type="text" name="search-field" value="" placeholder="Search" required="">
	                <button type="submit" class="icon"><i class="fa fa-search"></i></button>
	              </div>
	            </form>
	          </div>
	          <!-- Info Btn -->
	          <div class="btn-box">
	            <!-- Info Btn -->
	            <a href="tel:+6287844417321" class="info-btn-two"> <i class="icon fa fa-phone"></i> <small>Make a Call</small> <strong>+6287844417321</strong> </a>
	          </div>
	          <!-- Mobile Nav toggler -->
	          <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
	        </div>
	      </div>
	    </div>

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
	            <div class="text"><a href="https://html.kodesolution.com/cdn-cgi/l/email-protection#167e737a665675797b6677786f3875797b"><span class="__cf_email__" data-cfemail="a8c0cdc4d8e8cbc7c5d8c9c6d186cbc7c5">[email&#160;protected]</span></a></div>
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

	<script>
document.addEventListener("DOMContentLoaded", function () {
    let navLinks = document.querySelectorAll(".navigation li a");

    navLinks.forEach(link => {
        link.addEventListener("click", function () {
            // Hapus class active dari semua menu
            navLinks.forEach(nav => nav.parentElement.classList.remove("active"));

            // Tambahkan class active ke menu yang diklik
            this.parentElement.classList.add("active");
        });
    });
});
</script>


	<style>
		html {
    			scroll-behavior: smooth;
			}
			.navigation li a {
    position: relative;
    display: inline-block;
    padding-bottom: 5px;
    transition: all 0.3s ease-in-out;
}

.navigation li a::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 2px;
    background-color:rgb(255, 0, 0); /* Warna garis */
    transition: width 0.3s ease-in-out;
}

.navigation li a:hover::after,
.navigation li.active a::after {
    width: 100%;
}

	</style>