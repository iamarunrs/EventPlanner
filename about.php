<?php
session_start();
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
	<div class="w3ls-banner-1"> 
		<!-- banner-text --> 
	
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
							if (isset($_SESSION["username"]))
							{
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
	</div>	
<!-- about -->
<!-- about -->
	<div class="about">
		<div class="container">
		<h2 class="heading-agileinfo">About Us<span>Events is a professionally managed Event</span></h2>
			<div class="about-grids-1">
				<div class="col-md-5 wthree-about-left">
					<div class="wthree-about-left-info">
						<img src="images/g3.jpg" alt="" />
					</div>
				</div>
				<div class="col-md-7 agileits-about-right">
					<h5> We are a passionate team of event management professionals dedicated to turning your visions into extraordinary experiences. With creativity, precision, and a commitment to excellence, we bring your events to life, making memories that last a lifetime.</h5>
					<p>From corporate gatherings and product launches to weddings, parties, and everything in between, we specialize in crafting unforgettable moments. With meticulous planning and attention to detail, we transform your ideas into seamless, one-of-a-kind events that leave a lasting impression. Let us make your vision a reality, one event at a time.
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- offers -->
	<div class="offers">
		<div class="container">
			
			<h3 class="heading-agileinfo white-w3ls">Our Offers<span class="black-w3ls">Events is a professionally managed Event</span></h3>
			<div class="offers-grids">
				<div class="col-md-6 wthree-offers-left">
					<div class="offers-left-heading">
						<h4>Customized Packages.</h4>
					</div>
					<div class="offers-left-grids">
						<div class="offers-number">
							<p>1</p>
						</div>
						<div class="offers-text">
							<p>Customized Packages: We offer tailor-made event packages to suit your needs, ensuring that you get exactly what you want, without breaking the bank</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="offers-left-grids offers-left-middle">
						<div class="offers-number">
							<p>2</p>
						</div>
						<div class="offers-text">
							<p>Expert Planning: Our experienced team takes care of every detail, from venue selection and décor to catering and entertainment, so you can relax and enjoy the event.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="offers-left-grids">
						<div class="offers-number">
							<p>3</p>
						</div>
						<div class="offers-text">
							<p>Innovative Themes: We bring creativity to the table with a wide range of innovative themes, making your event truly unique and memorable.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 wthree-offers-right">
					<h5>CEco-Friendly Solutions</h5>
					<p>We care about the environment. Our sustainable event solutions help you reduce the carbon footprint of your gatherings, while still maintaining elegance and style. </p>
					<ul>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Zero-Waste Initiatives</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i>Green Transportation </a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Energy-Efficient Lighting</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Eco-Friendly Decor</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Paperless Options</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Carbon Offsetting</a></li>
						<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-angle-right" aria-hidden="true"></i> Locally Sourced Cuisine</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- offers -->
		<!-- about-team -->
	<div class="team">		
		<div class="container">
			<h3 class="heading-agileinfo">Our Team<span>Events is a professionally managed Event</span></h3>			
			<div class="team-row-agileinfo">
				<div class="col-md-3 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t2.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption ">
							<h4>John</h4>
							<p>Team Head</p>
							<div class="social-icon social-w3lsicon">
								<a href="#" class="social-button twit"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button fb"><i class="fa fa-facebook"></i></a> 
								<a href="#" class="social-button in"><i class="fa fa-linkedin"></i></a>  
							</div>	
						</div> 
					</div>
				</div>
				<div class="col-md-3 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t1.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption">
							<h4>Keni</h4>
							<p>CEO</p>
							<div class="social-icon social-w3lsicon">
								<a href="#" class="social-button twit"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button fb"><i class="fa fa-facebook"></i></a> 
								<a href="#" class="social-button in"><i class="fa fa-linkedin"></i></a>  
							</div>	
						</div> 
					</div>
				</div>
				<div class="col-md-3 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t3.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption">
							<h4>Sunny</h4>
							<p>Marketing Manager</p>				
							<div class="social-icon social-w3lsicon">
								<a href="#" class="social-button twit"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button fb"><i class="fa fa-facebook"></i></a> 
								<a href="#" class="social-button in"><i class="fa fa-linkedin"></i></a>  
							</div>	
						</div> 
					</div>
				</div>
				<div class="col-md-3 col-xs-6 team-grids">
					<div class="thumbnail team-agileits">
						<img src="images/t4.jpg" class="img-responsive" alt=""/>
						<div class="w3agile-caption">
							<h4>Manie</h4>
							<p>Field Executive</p>						
							<div class="social-icon social-w3lsicon">
								<a href="#" class="social-button twit"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-button fb"><i class="fa fa-facebook"></i></a> 
								<a href="#" class="social-button in"><i class="fa fa-linkedin"></i></a>  
							</div>	
						</div> 
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //about-team -->
<!-- about -->
<!-- footer-top -->	
	<div class="footer-top">
		<div class="container">
			<div class="col-md-3 foot-left">
				<h3>About Us</h3>
			
				<p>We are a passionate team of event management professionals dedicated to turning your visions into extraordinary experiences.</p>
			</div>
			<div class="col-md-3 foot-left">
					<h3>Get In Touch</h3>
					<p>Get in touch with us in social media</p>
				
						<div class="contact-btm">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							<p>90 Street, NGL City, TN State 629601.</p>
						</div>
						<div class="contact-btm">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							<p>+91 8940242654</p>
						<div class="contact-btm">
						</div>
							<span class="fa fa-envelope-o" aria-hidden="true"></span>
							<p><a href="mailto:iamarun.rs@gmail.com">iamarun.rs@gmail.com</a></p>
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
			<p>Subscribe our social media</p>
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
						<p>Our Events: From corporate gatherings and product launches to weddings, parties, and everything in between, we specialize in crafting unforgettable moments. With meticulous planning and attention to detail, we transform your ideas into seamless, one-of-a-kind events that leave a lasting impression. Let us make your vision a reality, one event at a time</p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/jquery-2.2.3.min.js"></script> 
	
<!-- skills -->
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