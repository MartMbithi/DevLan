<?php include("assets/_partials/head.php");?>

<body>
<div class="page-loader">
	<img src="assets/img/loader.gif" alt="">
</div>

<header id="header">
<div id="mega-menu" class="header header-sticky primary-menu icons-no default-skin zoomIn align-right">
	<div class="container">
		<div class="row">
            <!---Navigation Bar-->
			<div class="row">
			<?php include("assets/_partials/navbar.php");?>
			<!-- end nav -->
		</div>
			<!-- end nav -->
		</div>
		<!-- end .row -->
	</div>
	<!-- end .container -->
</div>
<!-- end .header -->
</header>
<!-- PARALLAX HEADER
================================================== -->
<section class="pagetitle parallax parallax-image" style="background-image:url(assets/img/hacktivity.png);">
<div class="wrapsection">
	<div class="overlay" style="background:#303543;opacity:0.4;">
	</div>
	<div class="container">
		<div class="parallax-content">
			<div class="block2 text-center max80" style="padding:0px;color:#fff;">
				<h3>
				<span class="text1 big wow bounceIn" data-wow-delay="0s" data-wow-duration="1s">
				<b>DevLan HackTivities</b>
				</span>
				</h3>
				
				<a href="#start" class="downarrowpoint wow zoomIn goscroll"><i class="fa fa-angle-double-down"></i></a>
			</div>
		</div>
	</div>
</div>
</section>
<!-- GALLERY
================================================== --> 
<section id="start" class="page-wrapper bot0">
<h2 class="title">Upcoming Event</h2>

</section>
<div class="container">
	<div class="row">
		<div id="portfolio-items" class="gallery portfolio-items">
			<div class="col-md-12">
				<article>
				<a class="gallery" href="assets/img/Devlan_Event _001.png">
				<img src="assets/img/Devlan_Event _001.png" alt=""/>
				</a>
				</article>
			</div>
		</div>
	</div>
</div>
<br/>
<!-- Footer
================================================== -->
<?php include("assets/_partials/footer.php");?>
<!-- JavaScript
================================================== -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/parallax.js"></script>
<script src='assets/js/countto.js'></script>
<script src="assets/js/portfolio.js"></script>
<script src="assets/js/scripts.js"></script>
<script>
$(document).ready(function(){
	$('.gallery').featherlightGallery({
		gallery: {
			fadeIn: 0,
			fadeOut: 0
		},
		openSpeed:    500,
		closeSpeed:   500
	});
});
</script>
</body>

</html>