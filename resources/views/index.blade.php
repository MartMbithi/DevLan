
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
	<!--Navbar-->
		
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
						<li class="active">
						    	<a href="/">
									<i class=" fa fa-bolt"></i>
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

						
						<li class="dropdown redq-fullwidth">
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
		<!-- end .row -->
	</div> 
	<!-- end .container -->
</div>
<!-- end .header -->
</header>
<!-- Animated Intro
================================================== -->
<div id="large-header" class="large-header">
	<canvas id="demo-canvas"></canvas>
	<h1 class="main-title">Dev<span class="thin wow pulse" data-wow-duration="1.8s" data-wow-delay="0.5s" data-wow-iteration="3">Lan</span><br/>
	<span class="smallh wow zoomIn"> Software Development| Coding | Networking Projects All Under One Platform </span><br/>
	<button type="button" class="btn btn-default wow fadeInLeft">Coding</button>
	<button type="button" class="btn btn-primary wow fadeInRight">Networking</button>
	</h1>
</div>
<!-- Features
================================================== -->
<section class="page-wrapper gray">
<div class="container">
	<h2 class="title">See Dev Lan In Action</h2>
	<div class="row">
		<div class="col-md-12 text-center">
			<p class="lead">
				 DevLan is the most flexible and open source project sharing platform.<br/> Its modern and fully responsive design best fits into current web trends.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.1s">
			<div class="octa">
			</div>
			<i class="fa fa-user"></i>
			<div class="feature-content">
				<h3>Modern</h3>
				<p>
					 The most flexible and complete projects sharing platform. Its base theme its  optimized for search engines and if you get stuck, DevLan Team offers dedicated support.
				</p>
			</div>
		</div>
		<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
			<div class="octa">
			</div>
			<i class="fa fa-flash"></i>
			<div class="feature-content">
				<h3>Creative</h3>
				<p>
					 Choose from multiple unique project designs from our platform. 
				</p>
			</div>
		</div>
		<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.7s">
			<div class="octa">
			</div>
			<i class="fa fa-microphone"></i>
			<div class="feature-content">
				<h3>Responsive</h3>
				<p>
					 Wide range of out of the box solutions. You can actually build any kind of projects  with DevLan. Personalize your project without coding expertise, design skills or any networking skills.
				</p>
			</div>
		</div>
	</div>
</div>
</section>

<!-- Portfolio
================================================== -->
<section class="page-wrapper bot0">
<h2 class="title">Portfolio</h2>
<p class="tagline">
	 Take a look at our Recent Work
</p>
<div id="portfolio-filter" class="text-center">
	<ul class="portfolio-filter-list">
		<li><a href="#" class="active" data-cat="*">ALL</a></li>
		<li><a href="#" data-cat=".design">Topologies</a></li>
		<li><a href="#" data-cat=".fashion">Web Apps</a></li>
		
	</ul>
</div>
<div id="portfolio-items" class="portfolio-items">
	<article class="video / fashion">
	<a href="portfolio-single.html">
	<img src="assets/img/demo/webapp1.jpg" alt=""/>
	<div class="overlay">
		<i class="fa fa-globe"></i>
		<h3>Web Application 1</h3>
		
	</div>
	</a>
	</article>
	<article class="video / fashion">
	<a href="portfolio-single.html">
	<img src="assets/img/demo/webap3.jpg" alt=""/>
	<div class="overlay">
		<i class="fa fa-globe"></i>
		<h3>Web Application 3</h3>
		
	</div>
	</a>
	</article>
	<article class="video / fashion " >
	<a href="portfolio-single.html">
	<img src="assets/img/demo/webapp2.jpg" alt=""/>
	<div class="overlay">
		<i class="fa fa-globe"></i>
		<h3>Web Application 2</h3>
		<span>fashion, video, shooting</span>
	</div>
	</a>
	</article>
	<article class="design / video / shooting">
	<a href="portfolio-single.html">
	<img src="assets/img/demo/topology1.jpg" alt=""/>
	<div class="overlay">
		<i class="fa fa-plug"></i>
		<h3>Gns3 Network Topology 1</h3>
		
	</div>
	</a>
	</article>
	<article class="video / fashion ">
	<a href="portfolio-single.html">
	<img src="assets/img/demo/webapp4.jpg" alt=""/>
	<div class="overlay">
		<i class="fa fa-globe"></i>
		<h3>Web Application 4</h3>
		
	</div>
	</a>
	</article>
	<article class="design / video / shooting">
	<a href="portfolio-single.html">
	<img src="assets/img/demo/topology2.jpg" alt=""/>
	<div class="overlay">
		<i class="fa fa-plug"></i>
		<h3>GNS3 Network  Topology 2</h3>
		
	</div>
	</a>
	</article>
	
	<article class="design / video / shooting">
	<a href="portfolio-single.html">
	<img src="assets/img/demo/topology3.jpg" alt=""/>
	<div class="overlay">
		<i class="fa fa-plug"></i>
		<h3>GNS3 Network Topology 3</h3>
		
	</div>
	</a>
	</article>
	<article class="design / video / shooting">
	<a href="portfolio-single.html">
	<img src="assets/img/demo/topolog4.jpg" alt=""/>
	<div class="overlay">
		<i class="fa fa-plug"></i>
		<h3>GNS3 Network Topology 4</h3>
	</div>
	</a>
	</article>
</div>
</section>

<!-- Team
================================================== -->


<!-- Timeline
================================================== -->
<section id="tline" class="page-wrapper gray">
<!--
<div class="container">
	<h2 class="title">Dev Lan Hacktivity</h2>
	<div class="row">
		<div class="col-md-12">
			<ul class="tline-holder">
				
				<li class="tline-item-left wow fadeInLeft">
				<div class="tline-item-content">
					<div class="date-icon fa fa-rocket">
					</div>
					<div class="tline-item-txt text-right">
						<div class="meta">
							 January 2015
						</div>
						<h3>Love Fashion</h3>
						<p>
							 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
						</p>
					</div>
				</div>
				</li>
				
				<li class="tline-item-right wow fadeInRight">
				<div class="tline-item-content">
					<div class="date-icon fa fa-camera">
					</div>
					<div class="tline-item-txt text-left">
						<div class="meta">
							 December 2014
						</div>
						<h3>Green is Health</h3>
						<p>
							 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
						</p>
					</div>
				</div>
				</li>
				
				<li class="tline-item-left wow fadeInLeft">
				<div class="tline-item-content">
					<div class="date-icon fa fa-user">
					</div>
					<div class="tline-item-txt text-right">
						<div class="meta">
							 November 2014
						</div>
						<h3>Why you love us</h3>
						<p>
							 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
						</p>
					</div>
				</div>
				</li>
				
				<li class="tline-item-right wow fadeInRight">
				<div class="tline-item-content">
					<div class="date-icon fa fa-bullhorn">
					</div>
					<div class="tline-item-txt text-left">
						<div class="meta">
							 September 2014
						</div>
						<h3>Save our Planet</h3>
						<p>
							 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
						</p>
					</div>
				</div>
				</li>
				
				<li class="tline-start">
				<div class="tline-start-content">
					<div class="tline-start-icon">
					</div>
					<a href="#" class="btn btn-primary wow zoomIn">More</a>
				</div>
				</li>
			</ul>
		</div>
	</div>
</div> -->
</section>

 <!--Customers
================================================== -
<section class="split customers">
<div class="col-md-4 col-sm-4 accentbgcolor wow slideInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
	<img src="assets/img/demo/avatar3.png" alt="">
	<p>
		<em>"Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum."</em>
	</p>
	<p>
		<strong>Rachel Knight</strong><br>
		 PEPSI COKE
	</p>
</div>
<div class="col-md-4 col-sm-4 whitebgcolor wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.0s">
	<img src="assets/img/demo/avatar2.png" alt="">
	<p>
		<em>"Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum."</em>
	</p>
	<p>
		<strong>Teresa Harmon</strong><br>
		 GENERAL MOTORS
	</p>
</div>
<div class="col-md-4 col-sm-4 darkbgcolor wow slideInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
	<img src="assets/img/demo/avatar1.png" alt="">
	<p>
		<em>"Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum."</em>
	</p>
	<p>
		<strong>Rosa Ingram</strong><br>
		 LACOSTE
	</p>
</div>
</section> -->
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
</body>

</html>