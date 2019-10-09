<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>The City Project</title>
	<meta name="description" content="The City Project is a gaming community officially founded in 2017 that is focused on Minecraft and ClassiCube servers that are based on building your own world with jobs, politics, and many more opportunities." />
	<meta name="keywords" content="The City Project,city,Minecraft,server,Minecraft Server,ClassiCube,ClassiCube Server,building,cities,nations" />
  	<!-- Website Styling -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="all">
	<script src="js/modernizr-custom.js"></script>
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
	<!-- Open Graph Protocol -->
	<meta property="og:type" content="website" />
	<meta property="og:title" content="The City Project" />
	<meta property="og:description" content="The City Project is a gaming community officially founded in 2017 that is focused on Minecraft and ClassiCube servers that are based on building your own world with jobs, politics, and many more opportunities." />
	<meta property="og:url" content="https://cityproject.online" />
	<meta property="og:image" content="https://cityproject.online/images/transparent-logo.png" />
	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="The City Project" />
	<meta name="twitter:site" content="@TCityProject">
	<meta name="twitter:description" content="The City Project is a gaming community officially founded in 2017 that is focused on Minecraft and ClassiCube servers that are based on building your own world with jobs, politics, and many more opportunities.">
  	<meta name="twitter:image" content="https://cityproject.online/images/transparent-logo.png">
  	<!-- Extra Meta Information -->
	<meta name="author" content="The City Project" />
	<meta name="apple-mobile-web-app-title" content="The City Project" />
	<meta name="application-name" content="The City Project" />
	<meta name="msapplication-TileColor" content="#02444f" />
	<meta name="msapplication-config" content="https://cityproject.online/images/seo/browserconfig.xml" />
	<meta name="theme-color" content="#02444f" />
	<link rel="apple-touch-icon" sizes="180x180" href="https://cityproject.online/images/seo/apple-touch-icon.png" />
	<link rel="icon" type="image/png" sizes="32x32" href="https://cityproject.online/images/seo/favicon-32x32.png" />
	<link rel="icon" type="image/png" sizes="16x16" href="https://cityproject.online/images/seo/favicon-16x16.png" />
	<link rel="manifest" href="https://cityproject.online/images/seo/site.webmanifest" />
	<link rel="mask-icon" href="https://cityproject.online/images/seo/safari-pinned-tab.svg" color="#02444f" />
	<link rel="shortcut icon" href="https://cityproject.online/images/seo/favicon.ico" />	
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Special Website Functions -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="agileinfo-dot">
			<div class="agileits-logo">
				<h1><a href="index.html"><span>The City Project</span></a></h1>
			</div>
			<div class="header-top">
				<div class="container">
					<div class="header-top-info">
						<nav class="navbar navbar-default">

							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>


							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<?php require 'header.php'; ?>
							</div>

						</nav>
					</div>
				</div>
			</div>
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="w3layouts-banner-slider">
						<div class="w3layouts-banner-top-slider">
							<div class="slider">
								<div class="callbacks_container">
									<ul class="rslides callbacks callbacks1" id="slider4">
										<li>
											<div class="banner_text">
												<h3>World Building</h3>
												<p>Make your own world today on The City Project.</p>
												<div class="w3-button">
													<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
												</div>
											</div>
										</li>
										<li>
											<div class="banner_text">
												<h3>ClassiCube</h3>
												<p>Our ClassiCube server is now in open beta!</p>
												<div class="w3-button">
													<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="clearfix"> </div>
								<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(window).load(function() {

									  $("#slider4").responsiveSlides({
										auto: true,
										pager:true,
										nav:true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
								 </script>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
	<div class="about" id="about"> 
		<div class="container"> 
			<div class="welcome">
				<div class="agileits-title"> 
					<h2>Our Origin Story</h2>
					<p>The City Project started off as "Real-Life Roleplay Server" on ClassiCube by Kingmb. Eventually, the server was renamed to The City Project with Pear and Kingmb at the helm. Major development occurred on the ClassiCube server driven by Pear's and Kingmb's effort. The Minecraft server was developed at first by Pear as a spinoff for a project, but eventually separated from the now-defunct project to join its sister server on ClassiCube right here, where it's officially recognized as The City Project.</p>
				</div>
			</div>
			<div class="about-w3lsrow"> 
				<div class="col-md-7 col-sm-7 w3about-img"> 
					<div class="w3about-text"> 
						<h5 class="w3l-subtitle">- About Us</h5>
						<p>The City Project is a gaming community focused on Minecraft and ClassiCube servers that are based on building your own world with jobs, politics, and many more opportunities. Players decide where they want to live in, who they want to work for, which party they want to vote for, and how they live and survive. There is no limit to possibilities, the only limit is you. Create your own future today.</p>
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about --> 
	<!-- markets -->
	<div class="markets" id="markets">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Even More...</h3>
			</div>
			<div class="markets-grids">
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-server" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>State of the Art Tech</h5>
							<p>Redliner, our dedicated server, is equipped with the latest and greatest technologies available. Our server is open 24 hours, 7 days a week.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-trophy" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Aliquam</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Consectetur</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-thumbs-up" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Bibendum</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-comments" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Vestibulum</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 w3ls-markets-grid">
					<div class="agileits-icon-grid">
						<div class="icon-left">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="icon-right">
							<h5>Fermentum</h5>
							<p>Phasellus dapibus felis elit, sed accumsan arcu gravida vitae. Nullam aliquam erat at lectus ullamcorper, nec interdum neque hendrerit.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //markets -->
	<!-- portfolio -->
	<div class="portfolio" id="gallery">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Our Gallery</h3> 
			</div>
			<ul class="simplefilter w3layouts agileits">
				<li class="active w3layouts agileits" data-filter="all">All</li>
				<!-- <li class="w3layouts agileits" data-filter="1">Minecraft: Java Edition</li> -->
				<li class="w3layouts agileits" data-filter="2">ClassiCube</li>
			</ul>

			<div class="filtr-container w3layouts agileits">

			<div class="filtr-container w3layouts agileits">

				<!-- <div class="filtr-item w3layouts agileits portfolio-t" data-category="1" data-sort="Minecraft: Java Edition">
					<a href="images/p1.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p1.jpg" class="img-responsive w3layouts agileits">
							<figcaption>
								<h3>The <span>City Project</span></h3>
							</figcaption>
						</figure>
					</a>
				</div> -->

				<div class="filtr-item w3layouts agileits" data-category="2" data-sort="ClassiCube">
					<a href="images/p2.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p2.jpg" class="img-responsive w3layouts agileits">
							<figcaption>
								<h3>The <span>City Project</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<!-- <div class="filtr-item w3layouts agileits" data-category="1" data-sort="Minecraft: Java Edition">
					<a href="images/p3.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p3.jpg" class="img-responsive w3layouts agileits">
							<figcaption>
								<h3>The <span>City Project</span></h3>
							</figcaption>
						</figure>
					</a>
				</div> -->

				<div class="filtr-item w3layouts agileits" data-category="2" data-sort="ClassiCube">
					<a href="images/p4.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p4.jpg" class="img-responsive w3layouts agileits">
							<figcaption>
								<h3>The <span>City Project</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<div class="filtr-item w3layouts agileits" data-category="2" data-sort="ClassiCube">
					<a href="images/p5.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p5.jpg" class="img-responsive w3layouts agileits">
							<figcaption>
								<h3>The <span>City Project</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<!-- <div class="filtr-item w3layouts agileits" data-category="1" data-sort="Minecraft: Java Edition">
					<a href="images/p6.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p6.jpg" class="img-responsive w3layouts agileits">
							<figcaption>
								<h3>The <span>City Project</span></h3>
							</figcaption>
						</figure>
					</a>
				</div> -->

				<div class="filtr-item w3layouts agileits" data-category="2" data-sort="ClassiCube">
					<a href="images/p7.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p7.jpg" class="img-responsive w3layouts agileits">
							<figcaption>
								<h3>The <span>City Project</span></h3>
							</figcaption>
						</figure>
					</a>
				</div>

				<!-- div class="filtr-item w3layouts agileits" data-category="1" data-sort="Minecraft: Java Edition">
					<a href="images/p8.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p8.jpg" class="img-responsive w3layouts agileits">
							<figcaption>
								<h3>The <span>City Project</span></h3>
							</figcaption>
						</figure>
					</a>
				</div> -->

				<!-- <div class="filtr-item w3layouts agileits" data-category="1" data-sort="Minecraft: Java Edition">
					<a href="images/p9.jpg" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="images/p9.jpg" class="img-responsive w3layouts agileits">
							<figcaption>
								<h3>The <span>City Project</span></h3>
							</figcaption>
						</figure>
					</a>
				</div> -->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //portfolio -->
	<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title">The <span>City Project</span></h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/1.jpg" alt="" />
                      <p><strong>The City Project Newsroom, October 2018</strong> --- Our ClassiCube server is now in public beta phase. At this point, you can visit our server and explore what we have to offer. Keep in note that the server is not completely finished, so few bugs are expected. If you are new to ClassiCube, <a href="">click here for a tutorial on how to join our ClassiCube server.</a> </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- team -->
	<div class="team" id="team">
		<div class="container">
			<div class="agileits-title"> 
				<h3>Our Team and Partners</h3> 
			</div>
			<div class="agileits-team-grids">
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="https://www.gravatar.com/avatar/603529eea4b539184cf18a7a5f926a1d.png?r=g&size=255&default=https%3A%2F%2Fcityproject.online%2Fimages%2Ftransparent-logo.png" alt="">
						<div class="team-caption"> 
							<h4>Pear</h4>
							<p>The founder and main owner of The City Project.</p>
							<ul>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="https://www.gravatar.com/avatar/41427e08a174f0a41f190d9e77634698.png?r=g&size=255&default=https%3A%2F%2Fcityproject.online%2Fimages%2Ftransparent-logo.png" alt="">
						<div class="team-caption"> 
							<h4>Kingmb</h4>
							<p>The 2nd owner and head management of The City Project.</p>
							<ul>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="images/redliner.png" alt="Redliner's official logo">
						<div class="team-caption"> 
							<h4>Kamino</h4>
							<p>Owner and manager of Redliner</p>
							<ul>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileits-team-grid">
					<div class="team-info">
						<img src="https://www.gravatar.com/avatar/00000000000000000000000000000000.png?r=g&size=255&default=https%3A%2F%2Fcityproject.online%2Fimages%2Ftransparent-logo.png" alt="">
						<div class="team-caption"> 
							<h4>???</h4>
							<p>Coming soon</p>
							<ul>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-top">
				<?php require 'footer.php'; ?>
			</div>
		</div>
	</div>
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- Tabs-JavaScript -->
	<script src="js/jquery.filterizr.js"></script>
		<script src="js/controls.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-container').filterizr();
			});
		</script>
	<!-- //Tabs-JavaScript -->
	<!-- PopUp-Box-JavaScript -->
		<script src="js/jquery.chocolat.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-item a').Chocolat();
			});
		</script>
	<!-- //PopUp-Box-JavaScript -->
</body>	
</html>
