<?php
require("connection.php");
session_start();
$e=$_SESSION["username"];
if (empty($_SESSION["username"]))
{
header("location:login.php");
exit;
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
<title>Events</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Events Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->
<!-- //Custom Theme files --> 

<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<!-- //web-fonts -->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  
	<!-- banner -->
	<div id="home" class="w3ls-banner"> 

		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
									<h3>We Celebrate  <span>Birthday Parties</span></h3>
												<p>Birthday Parties for memorable day</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
									<h3>We Celebrate  <span>Newyear Parties</span></h3>
										<p>New year to remember till next year with US.</p>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h3>We Celebrate  <span>Marriage Functions</span></h3>
										<p>Wonderful day with your life partner.</p>
									<div class="agileits_w3layouts_more menu__item">
											<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
										</div>
								</div>
								
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			
			<!--banner Slider starts Here-->
		</div>
		 
 
	</div>	
	<!-- //banner --> 
			<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Events</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php">Events</a></h1>
						<h2><?php echo $e ?></h2>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
							<li><a class="hvr-sweep-to-right" href="index.php">Home</a></li>
							<li><a class="hvr-sweep-to-right" href="about.php">About</a></li>
							<li><a class="hvr-sweep-to-right" href="enquiry.php">Enquiry</a></li>
							<li><a class="hvr-sweep-to-right" href="events.php">Events</a></li>
							<?php
							 if (isset($_SESSION['username'])) {
				                echo '<li><a class="hvr-sweep-to-right" href="logout.php">Logout</a></li>';
 						           } else {
				                echo '<li><a class="hvr-sweep-to-right" href="login.php">Login</a></li>';
					            }
							?>
							<li><a class="hvr-sweep-to-right" href="careers.php">Careers</a></li>
							<li><a class="hvr-sweep-to-right" href="contact.php">Contact</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
		</div>	
		<!-- //header -->
		<!-- ser_agile -->
		<div class="ser_agile">
			<div class="container">
			<h2 class="heading-agileinfo">Welcome<span>Events is a professionally managed Event</span></h2>
			<p>We manage events with professional teams.</p>
			<div class="ser_w3l">  
			  <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-birthday-cake" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>Birthday</h4>
					<p>Birthdays to party and enjoy.</p>
				  </div>
				</div>
			  </div>
			  <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-headphones" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>Diwali</h4>
					<p>Celebrations with sweet and firecrackers.</p>
				  </div>
				</div>
			  </div>
			  <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-globe" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>Weddings</h4>
					<p>Marriage Celebrations to remember in your lifetime.</p>
				  </div>
				</div>
			  </div>
			  <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-camera" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>Photography</h4>
					<p>Best teams with photographer and designers.</p>
				  </div>
				</div>
			  </div>
			  <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-cutlery" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>Catering</h4>
					<p>Manage professional catering services.</p>
				  </div>
				</div>
			  </div>
			  <div class="outer-wrapper">
				<div class="inner-wrapper">
				  <div class="icon-wrapper">
					<i class="fa fa-tasks" aria-hidden="true"></i>
				  </div>
				  <div class="content-wrapper">
					<h4>Teams</h4>
					<p>Manage each sessions with each teams.</p>
				  </div>
				</div>
			  </div>
			  <div class="clearfix"></div>
			  </div>
			</div>
		</div>
	<!-- //ser_agile -->
<!-- Stats -->
	<div class="stats-agileits">
	<div class="container">
		<h3 class="heading-agileinfo white-w3ls">We Have Something To Be Proud Of<span class="black-w3ls">Events is a professionally managed Event</span></h3>
	</div>
		<div class="stats-info agileits w3layouts">
		<div class="container">
			<div class="col-md-4 col-sm-4agileits w3layouts stats-grid stats-grid-1">
				<i class="fa fa-users" aria-hidden="true"></i>
				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='2500' data-delay='3' data-increment="2">2500</div>
				<div class="stat-info-w3ls">
					<h4 class="agileits w3layouts">Happy Clients</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 agileits w3layouts stats-grid stats-grid-2">
				<i class="fa fa-lightbulb-o" aria-hidden="true"></i>
				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='1000' data-delay='3' data-increment="2">1000</div>
				<div class="stat-info-w3ls">
					<h4 class="agileits w3layouts">Events</h4>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 stats-grid agileits w3layouts stats-grid-3">
			<i class="fa fa-cog" aria-hidden="true"></i>
				<div class="numscroller agileits-w3layouts" data-slno='1' data-min='0' data-max='3421' data-delay='3' data-increment="2">3421</div>
				<div class="stat-info-w3ls">
					<h4 class="agileits w3layouts">Services</h4>
				</div>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //Stats -->
	
	<!-- showcase_w3layouts -->	
	<div class="showcase_w3layouts">
		<div class="container">
		<h3 class="heading-agileinfo">Services<span>Events is a professionally managed Event</span></h3>
			<div class="our_agile-info">
			<div class="showcase">
				<div class="thumbnail thumbnail--awesome">
					<div class="thumbnail__overlay">
						
					</div>
				</div>
				<div class="desc">
				
					<h4>Birthday</h4>
					<p>Birthdays with cakes and services as you wish.
					</p>
				</div>
			</div>
			
			<div class="showcase showcase--inverted">
				<div class="desc">
					
					<h4>Wedding</h4>
					<p>Planned wedding events for day or two.
					</p>
				</div>
				<div class="thumbnail thumbnail--awesome1">
					<div class="thumbnail__overlay">
						
					</div>
				</div>
			</div>
			<div class="showcase">
				<div class="thumbnail thumbnail--awesome2">
					<div class="thumbnail__overlay">
						
					</div>
				</div>
				<div class="desc">
				
					<h4>Photoshoot</h4>
					<p>Professional Photoshoot
					</p>
				</div>
			</div>
			<div class="showcase showcase--inverted">
				<div class="desc">
					
					<h4>Catering</h4>
					<p>Making food with professional in front of yours at night and day.
					</p>
				</div>
				<div class="thumbnail thumbnail--awesome3">
					<div class="thumbnail__overlay">
					
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>

	<!--testimonials-->
<div class="testimonials">
	<div class="container">
		<h3 class="heading-agileinfo">Event Manager Says<span>Events is a professionally managed Event</span></h3>
		<div class="flex-slider">
			<ul id="flexiselDemo1">			
				<li>
					<div class="laptop">
						<div class="col-md-8 team-right">
							<p>Your event management team made our dream celebration come true.</p>
							<div class="name-w3ls">
								<h5>Federer</h5>
								<span>Client</span>
							</div>
						</div>
						<div class="col-md-4 team-left">
							<img class="img-responsive" src="images/t1.jpg" alt=" " />
						</div>
						<div class="clearfix"></div>
					</div>
				</li>
				<li>
					<div class="laptop">
						<div class="col-md-8 team-right">
							<p>Exceptional service, from concept to execution, by your event planners.</p>
							<div class="name-w3ls">
								<h5>Thompson</h5>
								<span>Client</span>
							</div>
						</div>
						<div class="col-md-4 team-left">
							<img class="img-responsive" src="images/t2.jpg" alt=" " />
						</div>
						<div class="clearfix"></div>
					</div>
				</li>
			</ul>
			
		</div>

	</div>
</div>
<!--//testimonials-->

<!-- footer-top -->	
	<div class="footer-top">
		<div class="container">
			<div class="col-md-3 foot-left">
				<h3>About Us</h3>
			
				<p>We are a passionate team of event management professionals dedicated to turning your visions into extraordinary experiences. With creativity, precision, and a commitment to excellence, we bring your events to life, making memories that last a lifetime.</p>
			</div>
			<div class="col-md-3 foot-left">
					<h3>Get In Touch</h3>
					<p>get in touch with social media or by email.</p>
				
						<div class="contact-btm">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							<p>90 Street, NGL City, TN State 629601.</p>
						</div>
						<div class="contact-btm">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							<p>+91 89402 42654</p>
						<div class="contact-btm">
						</div>
							<span class="fa fa-envelope-o" aria-hidden="true"></span>
							<p><a href="mailto:iamarun.rs@gmail.com">iamarun.rs.com</a></p>
						</div>
						<div class="clearfix"></div>

			</div>
			<div class="col-md-3 foot-left">
				<h3>Latest Events</h3>
				<ul>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g1.jpg" alt="" class="img-responsive"></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g2.jpg" alt="" class="img-responsive"></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g3.jpg" alt="" class="img-responsive"></a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal"><img src="images/g4.jpg" alt="" class="img-responsive"></a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-3 foot-left">
			<h3>Subscribe</h3>
			<p>Subscribe our social accounts for better offers </p>
			<form action="#" method="post">	
					<input type="email" Name="Enter Your Email" placeholder="Enter Your Email" required="">
				<input type="submit" value="Subscribe">
			</form>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
<!-- /footer-top -->							

<!-- footer -->
			<div class="copy-right">
				<div class="container">
				<div class="col-md-6 col-sm-6 col-xs-6 copy-right-grids">
						<div class="copy-left">
						<p>&copy; 2023 Events. All rights reserved | Design by <a href="http://w3layouts.com/">Arun R</a></p>
						</div>
					</div>
				<div class="col-md-6 col-sm-6 col-xs-6 top-middle">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
					</div>
			</div>
			
<!-- //footer -->
<!-- bootstrap-modal-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Events
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
					<div class="modal-body">
						<img src="images/g8.jpg" alt=" " class="img-responsive" />
						<p>From corporate gatherings and product launches to weddings, parties, and everything in between, we specialize in crafting unforgettable moments. With meticulous planning and attention to detail, we transform your ideas into seamless, one-of-a-kind events that leave a lasting impression. <i>Let us make your vision a reality, one event at a time.</i></p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/jquery-2.2.3.min.js"></script> 
	
<!-- skills -->

						<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
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
			<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:false,
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

<!-- start-smoth-scrolling -->
<!-- OnScroll-Number-Increase-JavaScript -->
	<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //OnScroll-Number-Increase-JavaScript -->
<!--flexiselDemo1 -->
 <script type="text/javascript">
							$(window).load(function() {
								$("#flexiselDemo1").flexisel({
									visibleItems: 2,
									animationSpeed: 1000,
									autoPlay: true,
									autoPlaySpeed: 3000,    		
									pauseOnHover: true,
									enableResponsiveBreakpoints: true,
									responsiveBreakpoints: { 
										portrait: { 
											changePoint:480,
											visibleItems: 1
										}, 
										landscape: { 
											changePoint:640,
											visibleItems: 1
										},
										tablet: { 
											changePoint:991,
											visibleItems: 1
										}
									}
								});
								
							});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!--//flexiselDemo1 -->

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
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
</body>
</html>