<?php
session_start();
include_once 'dbConnect.php';
if(isset($_POST['reg-btn']))
{
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $branch = $_POST['course'];
    $pn = $_POST['phnumber'];
    $email = $_POST['email'];
    $noc = $_POST['nameofthecollege'];
    $gen = $_POST['gender'];
    $acc = $_POST['accomodation'];
    $insert = mysqli_query($conn,"INSERT INTO `regis`(`surname`, `name`, `branch`, `noc`, `phno`, `email`, `gender`, `accomodation`) VALUES ('$surname','$name','$branch','$noc','$pn','$email','$gen' ,'$acc')");
    if($insert)
    {
        echo("registered");
        header("Location: index.html");
    }
    else
    {
        echo("Registration failed...pls contact help line");
    }
}
?>




<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ADVIKA 2K18 - Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">
<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-5 col-xs-1">
					<div id="gtco-logo">
                        <img src="images/logo.png" alt="" style="width:70px;height:70px;">
                        <a href="index.html">University college of <em>Engineering</em></a></div>
				</div>
				<div class="col-xs-5 text-right menu-1 col-xs-push-2">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="protocols.html">Protocols</a></li>
						<li class="has-dropdown">
							<a href="#">Events</a>
							<ul class="dropdown">
								<li><a href="#">Web Design</a></li>
								<li><a href="#">eCommerce</a></li>
								<li><a href="#">Branding</a></li>
								<li><a href="#">API</a></li>
							</ul>
						</li>
						<li><a href="helpers.html">Helpers</a></li>
						<li><a href="About%20us.html">About Us</a></li>
						<li class="btn-cta"><a href="registration.php"><span>Registration</span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_1.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">

						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small">Here's the</span>
							<h1>Registration</h1>	
						</div>
						
					</div>
							
					
				</div>
			</div>
		</div>
	</header>
        <div id="gtco-subscribe">
            <div class="gtco-container border">
                <div class=" text-left">
                    <h2>Registration Form</h2>
                    <form method="post" action="#">
										<div class="row gtr-uniform">
											<div class="animate-box" data-animate-effect="fadeInRight">
                                                <input type="text" name="surname" id="surname" value="" placeholder="Surname" required/>
												<input type="text" name="name" id="name" value="" placeholder="Name" required />
                                            </div>
                                             <div class="animate-box" data-animate-effect="fadeInRight">
												<input type="text" name="course" id="course" value="" placeholder="Branch/Course" required/>
                                                 <input type="text" name="nameofthecollege" id="nameofthecollege" value="" placeholder="Name of the college" required/>
											</div>
											<div class="animate-box" data-animate-effect="fadeInLeft">
                                                <input type="text" name="phnumber" id="phnumber" value="" placeholder="Phone number" required/>
												<input type="email" name="email" id="email" value="" placeholder="Email" />
											</div>
                                        </div>
                                        <div class=" row gtr-uniform animate-box" data-animate-effect="fadeInLeft">
                                            <label for="gender">Gender:</label>
                                            </div>
                                            <div  id="gender" class="animate-box" data-animate-effect="fadeInUp">
                                            
                                            <input type="radio" name="gender" id="male"  value="male"checked/>
                                                <label for="male">Male</label>
                                            </div>
                                            <div class="animate-box" data-animate-effect="fadeInUp">
                                                <input type="radio" name="gender" id="female" value="female"/>
                                                <label for="female">Female</label>
                                            </div>
                                            <div class=" row gtr-uniform animate-box" data-animate-effect="fadeInRight">
                                            <label for="acc">Accomodation:</label>
                                            </div>
                                            <div id="acc" class="animate-box" data-animate-effect="fadeInUp">
                                            
                                            <input type="radio" name="accomodation" id="yes" value="yes"/>
                                                <label for="yes">Yes</label>
                                            </div>
                                            <div class="animate-box" data-animate-effect="fadeInUp">
                                                <input type="radio" name="accomodation" id="no" value="no"checked />
                                                <label for="no">No</label>
                                            </div>
                            
                                            <div class="row gtr-uniform animate-box" data-animate-effect="fadeInLeft">
                                                <label for="eve">Events:</label>
											<div class="animate-box" data-animate-effect="fadeInLeft" id="eve">
                                                <label for="event1" id="event">Event 1:</label>
												<select name="event1" id="event1">
													<option value="">- Select -</option>
													<option value="alpha">Option alpha</option>
													<option value="beta">Option beta</option>
													<option value="gamma">Option gamma</option>
													<option value="delta">Option delta</option>
													<option value="epsilon">Option epsilon</option>
													<option value="zeta">Option zeta</option>
													<option value="eta">Option eta</option>
													<option value="theta">Option theta</option>
												</select>
                                                <label for="event2">Event 2:</label>
												<select name="event2" id="event2">
													<option value="">- Select -</option>
													<option value="alpha">Option alpha</option>
													<option value="beta">Option beta</option>
													<option value="gamma">Option gamma</option>
													<option value="delta">Option delta</option>
													<option value="epsilon">Option epsilon</option>
													<option value="zeta">Option zeta</option>
													<option value="eta">Option eta</option>
													<option value="theta">Option theta</option>
												</select>
                                                
											</div>
                                            <div class="animate-box" daa-animate-effect="fadeInRight">
                                                <label for="event3">Event 3:</label>
												<select name="event3" id="event3">
													<option value="">- Select -</option>
													<option value="alpha">Option alpha</option>
													<option value="beta">Option beta</option>
													<option value="gamma">Option gamma</option>
													<option value="delta">Option delta</option>
													<option value="epsilon">Option epsilon</option>
													<option value="zeta">Option zeta</option>
													<option value="eta">Option eta</option>
													<option value="theta">Option theta</option>
												</select>
                                                 <label for="event4">Event 4:</label>
												<select name="event4" id="event4">
													<option value="">- Select -</option>
													<option value="alpha">Option alpha</option>
													<option value="beta">Option beta</option>
													<option value="gamma">Option gamma</option>
													<option value="delta">Option delta</option>
													<option value="epsilon">Option epsilon</option>
													<option value="zeta">Option zeta</option>
													<option value="eta">Option eta</option>
													<option value="theta">Option theta</option>
												</select>
                                            </div>
                                                <div class="small">
                                                    <p>* </p>
                                                </div>
                                        </div>
											<!-- Break -->
											<!-- Break -->
											<div class="btn-cta col-md-push-2 animate-box" data-animate-effect="fadeIn">
													<a><input type="submit" value="Register" class="primary" name="reg-btn"/></a>
											</div>
									</form>
	           </div>
            </div>
        </div>
        <footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row copyright">
				<div class="col-md-10">
					<p class="pull-left">
						<small class="block">&copy; College of Engineering. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="#">Abhinay Karrothu</a></small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-mail"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

