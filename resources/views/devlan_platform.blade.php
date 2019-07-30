
@include('layouts.head')
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
			<!---Navigation Bar-->
			<div class="row">
			<nav class="navbar navbar-default redq" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand large" href='/'><img src="assets/img/logo.png" alt="Dev Lan"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
				<div class="collapse navbar-collapse">
					<a class="navbar-brand mobile pull-left" href="#"><i class="fa fa-diamond"></i>Dev<span class="logo-style">Lan</span></a>
					<a class="mobile-menu-close"><i class="fa fa-random"></i></a>
					<ul class="nav navbar-nav nav-list">
						<li>
						    	<a href="/">
									<i class="fa fa-bolt"></i>
										<span class="link-item">Home</span>
								</a>
						</li>

						<li class="dropdown redq-halfwidth">
								<a href="/devlan_aboutus">
									<i class="fa fa-bolt"></i>
										<span class="link-item">About Us</span>
								</a>
						
						</li>
						
						<li class="dropdown redq-fullwidth">
						<a href="/devlan_team">
								<i class="fa fa-bolt"></i>
								<span class="link-item">Le' Gang</span>
							</a>
						
						</li>

						

						<li class="dropdown active redq-fullwidth">
						<a href="/devlan_platform">
								<i class="fa fa-bolt"></i>
								<span class="link-item">DevLan Platform</span>
							</a>
						
						</li>

						
						
					</ul>
					<!-- end .nav .navbar-nav -->
				</div>
				
			</div>
			<!-- end .container -->
			</nav>
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
<!-- Animated Intro
================================================== -->
<div id="large-header" class="large-header" style="background-image:url(assets/img/demo/random9.jpg)">
	<canvas id="demo-canvas"></canvas>
	<h1 class="main-title">
	<span class="text1 big wow bounceIn" data-wow-delay="0s" data-wow-duration="1s" style="margin-bottom:20px;padding:15px 0; border-top: 1px solid; border-bottom: 1px solid; display: inline-block;">
	<b>DEVLAN PLATFORM COMING SOON</b>
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
@include('layouts.footer')
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
            date: '12/01/2019 12:00:00',
            offset: +10
        }, function () {
            alert('WOOT WOOT, done!');
        });
</script>
</body>

</html>