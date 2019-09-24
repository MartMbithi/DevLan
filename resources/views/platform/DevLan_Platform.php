<?php include("assets/_partials/head.php");?>

<body>
<div class="page-loader">
	<img src="assets/img/loader.gif" alt="">
</div>
<!-- Header
================================================== -->
<header id="header">
<div id="mega-menu" class="header header-sticky primary-menu icons-no default-skin zoomIn align-right">
	<div class="container">
		<div class="row">
				 <?php include('assets/_partials/navbar.php');?>

			<!-- end nav -->
		</div>
		<!-- end .row -->
	</div>
	<!-- end .container -->
</div>
<!-- end .header -->
</header>
<!-- Animated Intro
================================================== -->
<div id="large-header" class="large-header" style="background-image:url(assets/img/demo/random9.jpg)">
	<canvas id="demo-canvas"></canvas>
	<h1 class="main-title">
	<span class="text1 big wow bounceIn" data-wow-delay="0s" data-wow-duration="1s" style="margin-bottom:20px;padding:15px 0; border-top: 1px solid; border-bottom: 1px solid; display: inline-block;">
	<b>We Under Repair Please Come Back After</b>
	</span>
	
	<ul class="countdown">
		<li><span class="days">00</span>
		<p class="days_ref">
			 days
		</p>
		</li>
		<li class="seperator">.</li>
		<li><span class="hours">00</span>
		<p class="hours_ref">
			 hours
		</p>
		</li>
		<li class="seperator">:</li>
		<li><span class="minutes">00</span>
		<p class="minutes_ref">
			 minutes
		</p>
		</li>
		<li class="seperator">:</li>
		<li><span class="seconds">00</span>
		<p class="seconds_ref">
			 seconds
		</p>
		</li>
	</ul>
	</h1>	
</div>
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
<script src="assets/js/animheader.js"></script>
<script src="assets/js/scripts.js"></script>
<script type="text/javascript">
$('.countdown').downCount({
            date: '09/23/2019 12:00:00',
            offset: +10
        }, function () {
            alert('WOOT WOOT, done!');
        });
</script>
</body>

</html>