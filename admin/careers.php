<?php
require("connection.php");
session_start();
if (empty($_SESSION["username"]))
{
	echo '<script>alert("Log in to access careers"); window.location="login.php";</script>';
	exit;
}
$e=$_SESSION["username"];
$signid = $_SESSION["logid"];

$res=$con->query("SELECT logid from tb_sign where email= '$e'");
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
							if (isset($_SESSION["username"]))
							{
								echo '<li><a class="hvr-sweep-to-right" href="logout.php">Logout</a></li>';
							}
							else
							{
								echo '<li><a class="hvr-sweep-to-right" href="login.php">Login</a></li>';
							}
							?>
							<li><a class="hvr-sweep-to-right" href="careers.php">Careers</a></li>
							<li><a class="hvr-sweep-to-right" href="status.php">Career-Status</a></li>
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
	<div class="about" style="background: linear-gradient(yellow, tomato, yellow);">
		<div class="container">
		<h2><center>Careers</center></h2>
			<form id="careerform" action="careerform.php" method="post" enctype="multipart/form-data" >
				<input type="number" name="signid" id="signid" required hidden value="<?php echo $signid; ?>" readonly>
                <div class="form-group">
                	<label for="name">Name</label>
                	<input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                	<label for="date">DOB</label>
                	<input type="date" class="form-control" name="age" id="age">
                </div>
                <div class="form-group">
                	<label for="email">Email</label>
                	<input type="email" class="form-control" name="email" id="email" value="<?php echo $_SESSION['username']; ?>">
                </div>
                <div class="form-group">
                	<label for="phone">Phone Number</label>
                	<input type="number" class="form-control" name="phone" id="phone">
                </div>
                <div class="form-group">
                	<label for="gender">Gender</label>
                	<label class="form check-label">
                		<input type="radio" name="gender" id="genderMale" value="male">Male</label>
                 		<label class="form check-label">
                		<input type="radio" name="gender" id="genderFemale" value="female">Female</label>
                </div>
                <div class="form-group">
                	<label for="education">Education</label>
                	<select class="form-control" id="qualification" name="Qualification">
                		<option value="">Select Education</option>
                		<option value="graduate">Graduate</option>
                		<option value="PG">Postgraduate</option>
                		<option value="Doctorate">Doctorate</option>
                	</select>
                </div>
                <div class="form-group">
                	<label for="country">Country</label>
                	<select class="form-control" id="selectctry" name="ctry">
                		<option value="">Select Country</option>
                		<?php 

                		$res=$con->query("SELECT * from countries");
                		$count=$res->num_rows;
                		if ($count > 0) {
                			while ($row=$res->fetch_assoc()) {
                		?>
                		<option value="<?php echo $row['cont_id'];?>">
                			<?php echo $row['name'];?></option>
                			<?php
                			}
                			}
                			?>
                </select>
               </div>
               <div class="form-group">
               	<label for="state">State</label>
               	<select class="form-control" id="selectst" name="state">
               		<option value="">Select State</option>
               		<option></option>
               	</select>
               </div>
                <div class="form-group">
                	<label for="image">Upload Photo</label>
                	<input type="file" class="form-control.file" name="image" id="image" accept="image/jpeg">
                </div>
                <div class="form-group">
                	<label for="resume">Upload Resume</label>
                	<input type="file" class="form-control.file" name="resume" id="resume" accept=".pdf, .doc, .docx">
                </div>
                <button type="submit" class="btn btn-danger" id="submitbt">Submit</button>
            </form>
		</div>
	</div>
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
						<p>&copy; 2023 Events. All rights reserved | Design by <a href="iamarun.rs@gmail.com/">Arun R</a></p>
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
						<p>Our Events: From corporate gatherings and product launches to weddings, parties, and everything in between, we specialize in crafting unforgettable moments. Let us make your vision a reality, one event at a time</p>
					</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-modal-pop-up --> 
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


	
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
<script>
	var maxdate = new Date();
	maxdate.setFullYear(maxdate.getFullYear() -18);
	document.getElementById("age").max = maxdate.toISOString().split('T')[0];

	var mindate =new Date();
    mindate.setFullYear(mindate.getFullYear() -60);
    document.getElementById("age").min = mindate.toISOString().split('T')[0];
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$("#selectctry").change(function(){
			var selectedcountry=$('#selectctry').val();
			$.ajax({
				url:'statesearch.php',
				type:'POST',
				data:{ ctry:selectedcountry },
				success:function(result) {
					
					$("#selectst").html(result);
				}

			});
		});
	});
</script>
<script type="text/javascript">
$(document).ready(function() {
$("#careerform").submit(function(event){
 
 var valid=true;

if ($("#name").val() === "" ){
	alert("enter NAME");
	return false;
}
else if ($("#age").val() === "") {
	alert("enter DOB");
	return false;
}
else if ($("#email").val() === "") {
	alert("enter EMAIL");
	return false;
}
else if ($("#phone").val() === "") {
	alert("Enter PHONENUMBER");
	return false;
}
else if (!$("#genderMale").is(":checked") && !$("#genderFemale").is(":checked")) {
	alert("Select GENDER");
	return false;
}
else if ($("#qualification").val() ==="") {
	alert("Select EDUCATION");
	return false;
}
else if ($("#selectctry").val() ==="" ){
	alert("Select Country");
	return false;
}
else if ($("#selectst").val() ===""){
	alert("Select State");
	return false;
}
else if ($("#image").val() ===""){
	alert("Upload IMAGE");
	return false;
}
else if ($("#resume").val() ==="") {
	alert("upload RESUME");
	return false;
}
	return valid;

});
});

</script>
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