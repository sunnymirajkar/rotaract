<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>ROTARACT 3131</title>		
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>img/fav.png">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" />

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/owl.theme.default.css" />

		<!-- Magnific Popup -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/magnific-popup.css" />

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
		 <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.e-calendar.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/blueimp-gallery.min.css">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" />
		<style type="text/css">
			#nav.nav-transparent:not(.fixed-nav) .main-nav>li>a {
		        color: #10161A;
		    }
		    @media only screen and (max-width: 480px) {
		    	#nav.nav-transparent:not(.fixed-nav) .main-nav>li>a {
			        color: #fff;
			    }	
		    }
		    @media only screen and (max-width: 767px) {
		    	#nav.nav-transparent:not(.fixed-nav) .main-nav>li>a {
			        color: #fff;
			    }	
			}    
		</style>
		<script type="text/javascript" src="<?php echo base_url(); ?>js/custom.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<!-- Header -->
		<header>
			<!-- Nav -->
			<nav id="nav" class="navbar nav-transparent">
				<div class="container">

					<div class="navbar-header">
						<!-- Logo -->
						<div class="navbar-brand">
							<a href="index.html">
								<img class="logo" src="img/logo.png" alt="logo">
								<img class="logo-alt" src="img/logo.png" alt="logo">
							</a>
						</div>
						<!-- /Logo -->

						<!-- Collapse nav button -->
						<div class="nav-collapse">
							<span></span>
						</div>
						<!-- /Collapse nav button -->
					</div>

					<!--  Main navigation  -->
					<ul class="main-nav nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url();?>">HOME</a></li>
						<li><a href="<?php echo base_url();?>districtcouncilmember">COUNCIL MEMBER</a></li>
						<li class="has-dropdown"><a href="#ABOUT US">ABOUT US</a>
							<ul class="dropdown">
								<li><a href="<?php echo base_url();?>aboutRotaract">ABOUT ROTARACT</a></li>
								<li><a href="<?php echo base_url();?>aboutrotaract3131">ABOUT ROTARACT 3131</a></li>
							</ul>
						</li>
						<li><a href="<?php echo base_url();?>districtclubs">CLUBS</a></li>
						<li><a href="<?php echo base_url();?>districtgallery">GALLERY</a></li>
						<li><a href="<?php echo base_url();?>clublogin">LOGIN</a></li>
						<li class="has-dropdown"><a href="#DOWNLOAD">DOWNLOAD</a>
							<ul class="dropdown">
								<li><a href="<?php echo base_url();?>protocols/Directroy.pdf" download>DIRECTORY</a></li>
								<li><a href="<?php echo base_url();?>protocols/Protocols.pdf" download>PROTOCOLS</a></li>
							</ul>
						</li>
						<li><a href="http://199.79.63.24:2095/" target="_blank">MAIL</a></li>
					</ul>
					<!-- /Main navigation -->

				</div>
			</nav>
			<!-- /Nav -->
		</header>
		<!-- /Header -->