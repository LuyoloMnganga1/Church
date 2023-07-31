<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Gospel Assemblies of Christ</title>
		<!-- add icon link -->
        <link rel = "icon" href ="images/logo.png" type = "image/x-icon">

		<!-- Loading third party fonts -->
		<link href="fonts/novecento-font/novecento-font.css" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>
	<style>
		.social [class*="fa fa-"] {
			background-color: blue;
			border-radius: 30px;
			color: #fff;
			display: inline-block;
			height: 30px;
			line-height: 30px;
			margin: auto 3px;
			width: 30px;
			font-size: 15px;
			text-align: center;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100% !important;
  background-color: #fff;
  color:#18345D;
}
	</style>
<?php 
	$currentpage = "$_SERVER[REQUEST_URI]";
 ?>
	<body>
		<div class="site-content">
			<header class="site-header">
				<div class="container">
					<a href="#" class="branding">
						<img src="images/logo.png" alt="" class="logo">
						<h1 class="site-title">Gospel Assemblies of Christ</h1>
					</a>
					<div class="main-navigation" id="navbar">
						<button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
						<ul class="menu">
							<li class="menu-item <?php if (str_ends_with($currentpage ,"index.php")) {echo "current-menu-item"; } else  {echo "";}?>"><a href="index.php">Home</a></li>
							<li class="menu-item <?php if (str_ends_with($currentpage ,"about.php")) {echo "current-menu-item"; } else  {echo "";}?>"><a href="about.php">About Us</a></li>
							<li class="menu-item <?php if (str_ends_with($currentpage ,"events.php")) {echo "current-menu-item"; } else  {echo "";}?>"><a href="events.php">Annual Events</a></li>
							<li class="menu-item <?php if (str_ends_with($currentpage ,"venues.php")) {echo "current-menu-item"; } else  {echo "";}?>"><a href="venues.php">Our Venues</a></li>
							<li class="menu-item <?php if (str_ends_with($currentpage ,"contact.php")) {echo "current-menu-item"; } else  {echo "";}?>"><a href="contact.php">Contact Us</a></li>
						</ul>
					</div>

					<div class="mobile-navigation"></div>
				</div>
			</header> <!-- .site-header -->
	<div class="content">
		 
		