
@include('layouts.head')
<body>
<div class="page-loader">
	<img src="assets/img/loader.gif" alt="">
</div>
<!-- Header
================================================== -->
<header id="header">
<div id="mega-menu" class="header header-sticky primary-menu icons-no default-skin zoomIn align-right">
	 <!--Navbar--->
     <div class="row">
			@include('layouts.navbar')
			<!-- end nav -->
		</div>

	<!-- end .container -->
</div>
<!-- end .header -->
</header>
<!-- Slider
================================================== -->
<section>
<div class="customtypewowslider fullwidth flexslider clearfix cayman-slider" style="max-height:700px;">
<ul class="slides slider-content-style1">

	<li style="background-color:#000;">	
	<img src="assets/img/demo/business1.jpg" alt=""/>
	<div class="row">
		<div class="flex-caption" style="top:18%;">
			<h2 class="wow bounceInUp" data-wow-duration="1.0s" data-wow-delay="0.1s">Real Time </h2>
			<h1 class="wow bounceInDown" data-wow-duration="1.0s" data-wow-delay="0.6s">Networking <span class="font500"> And </span><span class="font500">Software Development Projects</span></span></h1>
			<a class="btn btn-primary wow bounceInRight" href="#about" data-wow-duration="1.0s" data-wow-delay="0.9s">About DevLan </a>
		</div>
	</div>	
	</li>
</ul>
</div>
</section>

<!--About Us
================================================== -->
<section id="about" class="page-wrapper gray">
<div class="container">
	<h2 class="title">About Us</h2>
	<p class="tagline">
    DevLan is an oline platform that provides hosting for software development version control. We also provide access control and several collaboration features such as bug tracking, feature requests, task management, and wikis for every networking or coding project. 
    In addition to software development and network projects, DevLan supports the following formats and features:
    <b>Projects Documentation</b>, <b>Issue tracking Features</b> and <b>Email notifications.</b>
        
	</ul>
	</p>

	
</div>
</section>

<!-- Footer
================================================== -->
@include('layouts.footer')
<!-- JavaScript
================================================== -->
@include('layouts.script')

<script>
jQuery(document).ready(function($) {
   'use strict';
	$('.customtypewowslider').flexslider({
		pauseOnHover: false,    
		slideshow: true,
		smoothHeight: false,
		slideshowSpeed: 6000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
		animationSpeed: 900,
		animation: "fade",              //String: Select your animation type, "fade" or "slide"
		easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
		direction: "horizontal",
		controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
		useCSS: true,                   //{NEW} Boolean: Slider will use CSS3 transitions if available
		touch: true, 
		directionNav: false,
	});
});
</script>
</body>

</html>