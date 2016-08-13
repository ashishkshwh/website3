<!-------------------------------------------------------------------------------
=========================================
SELENA - Free Multi-purpose One Page Template
Version: 1.0 (Initial Release)
Designed By: Maher Jarrah

Website:		http://maherjarrah.com
Twitter:			https://twitter.com/MaherJarrah1
Facebook:		https://fb.com/maherjarrah111
Behance: 		https://www.behance.net/maherjarrah

You can use this template for your personal purposes only, and it's under Creative Commons Attribution-NonCommercial v3.0 license https://creativecommons.org/licenses/by-nc/3.0/
=========================================
--------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="SELENA - Free Multi-Purpose One Page Template">
<meta name="keywords" content="SELENA, Free, Multi-Purpose, One Page, Template, Responsive, HTML5, CSS3">
<meta name="author" content="Maher Jarrah">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- SITE TITLE -->
<title>SELENA - Free Multi-Purpose One Page Template</title>

<!-- =========================
      FAV AND TOUCH ICONS  
========================= -->	
<link rel="icon" href="images/favicon.ico">
<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="images/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-180x180.png">

<!-- =========================
     STYLESHEET
========================= -->	
<!-- FONT AWESOME -->
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- FORMSTONE NAVIGATION -->
<link rel="stylesheet" href="css/navigation.css">

<!-- COLORS -->
<link rel="stylesheet" href="css/colors/blue.css"> <!-- DEFAULT COLOR/ CURRENTLY USING -->
<!-- <link rel="stylesheet" href="css/colors/red.css"> -->
<!-- <link rel="stylesheet" href="css/colors/green.css"> -->
<!-- <link rel="stylesheet" href="css/colors/yellow.css"> -->
<!-- <link rel="stylesheet" href="css/colors/turquoise.css"> -->
<!-- <link rel="stylesheet" href="css/colors/purple.css"> -->
<!-- <link rel="stylesheet" href="css/colors/orange.css"> -->

<!-- CUSTOM STYLESHEET -->
<link rel="stylesheet" href="css/styles.css">

<!-- RESPONSIVE FIXES -->
<link rel="stylesheet" href="css/responsive.css">

<!-- Jquery -->
<script src="js/jquery-2.0.3.min.js"></script>

<script>
//make sure that js is enabled
$('html').addClass('js');
</script>

<!--[if lt IE 9]>
	<style>
	* {
		font-size:16px;
	}
	
	label {
		display:block;
	}
	</style>
<![endif]-->

</head>

<body>
<!-- =========================
     PRELOADER
========================== -->
<div class="preloader"></div>

<!-- =========================
     NAVIGATION 
========================== -->
<nav class="navigation dark-bg">
	<div class="wrapper">
		
		<!-- NAVIGATION HEADER -->
		<div class="navbar-header">
			<!-- LOGO -->
			<a class="navigation-logo" href="#">
				<img src="images/logo.png" alt="logo">
			</a>	
		</div>
		
		<!-- NAVIGATION LINKS -->
		<ul class="navigation-links"  data-navigation-handle=".navbar-header">
			<li><a href="index.html#home">Home</a></li>
			
			<li><a href="index.html#about">About</a></li>
			
			<li><a href="index.html#services">Services</a></li>
			
			<li><a href="index.html#portfolio">Portfolio</a></li>
			
			<li><a href="index.html#pricing">Pricing</a></li>
			
			<li><a href="index.html#team">Team</a></li>
			
			<li>
				<a href="#" class="external">Features</a> <!-- external link (out of this page) -->
				
				<!-- DROP DOWN -->
				<ul>
					<li><a href="single-portfolio.html">Single Portfolio</a></li>
					<li><a href="404.html">404 Page</a></li>
					<li><a href="shortcodes.html">Shortcodes</a></li>
				</ul>
			</li>
			
			<li><a href="index.html#contact">Contact</a></li>	
			
			<li>
				<!-- BUTTON -->
				<div class="btn-container">
					<a class="btn standard-btn" href="#">Download</a>
				</div>		
			</li>
		</ul>
		
	</div> <!-- /END WRAPPER -->
</nav>

<!-- =========================
     HOME
========================= -->	
<header class="send-mail-header dark-bg" id="home">
<div class="color-overlay">
	<div class="wrapper">
	
		<div class="send-mail">
			<!-- SEND MAIL SCRIPT -->
			<?php

			// Set the email subject
			$subject = "SELENA - Free Multi-Purpose One Page Template";

			// FIXME: Update this to your desired email address
			$to = "maherjarrah@dds.com";

			// Build the email data
			$msg = "NAME: "  .$_POST['name']    ."<br>\n";
			$msg .= "EMAIL: "  .$_POST['email']    ."<br>\n";
			$msg .= "Phone Number: "  .$_POST['phone']    ."<br>\n";
			$msg .= "message: "  .$_POST['message']    ."<br>\n";

			// Build the email headers
			$from = $_POST['email'];
			$headers = "From: $name <".$from. ">";

			// Send the email
			if (mail($to, $subject, $msg, $headers)) {
				// Set a 200 (okay) response code
				http_response_code(200);
				echo "<h1><span class='colored-text'>Thank You!</span> Your message has been sent</h1>";
			} else {
				// Set a 500 (internal server error) response code
				http_response_code(500);
				echo "<h1><span class='colored-text'>Oops!</span> Something went wrong and we couldn't send your message</h1>";
			}

			?>
		</div>
		
	</div> <!-- /END WRAPPER -->
</div> 
</header>

<!-- =========================
     FOOTER   
========================= -->	
<footer class="dark-bg">
	<!-- BACK TO TOP -->
	<a class="icon back-to-top" href="#home"><i class="fa fa-home"></i></a>
	
	<!-- SOCIAL NAVIGATION -->
	<ul class="social-navigation">
		<li><a href="https://www.facebook.com/maherjarrah111" class="icon"><i class="fa fa-facebook"></i></a></li>
		<li><a href="https://twitter.com/MaherJarrah1" class="icon"><i class="fa fa-twitter"></i></a></li>
		<li><a href="https://www.behance.net/maherjarrah" class="icon"><i class="fa fa-behance"></i></a></li>
		<li><a href="#" class="icon"><i class="fa fa-google-plus"></i></a></li>
		<li><a href="#" class="icon"><i class="fa fa-linkedin"></i></a></li>
		<li><a href="#" class="icon"><i class="fa fa-instagram"></i></a></li>
	</ul>
	
	<!-- COPYRIGHT -->
	<p>
		&copy; 2015 Unas Theme | Made with <i class="fa fa-heart heart"></i> by <a href="http://maherjarrah.com">Maher Jarrah</a>
	</p>
</footer>

<!-- =========================
     SCRIPTS   
========================= -->	
<!-- Formstone Navigation -->
<script src="js/core.js"></script>
<script src="js/mediaquery.js"></script>
<script src="js/swap.js"></script>
<script src="js/touch.js"></script>
<script src="js/navigation.js"></script>

<!-- Smoothscroll -->
<script src="js/smoothscroll.js"></script>

<!-- Jquery Nav -->
<script src="js/jquery.nav.js"></script>

<!-- ImagesLoaded -->
<script src="js/jquery.imagesloaded.js"></script>

<!-- Wookmark -->
<script src="js/jquery.wookmark.min.js"></script>

<!-- Retina -->
<script src="js/retina.min.js"></script>

<!-- Custom Script -->
<script src="js/custom.js"></script>

</body>
</html>