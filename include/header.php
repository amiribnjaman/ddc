<?php

$page = explode('/',$_SERVER['PHP_SELF']);
$current_page = end($page);

// include 'admin/app/classes/home-page.php';
// $home = new Contents;
// $color = $home->theme_color_pick();
// $row = mysqli_fetch_assoc($color);
// $color_pick = $row['color_code'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="hospital,diabetic,dagonbhuiyan-diabetic,dagonbhuiyan-hospital">
	<meta name="description" content="Dagonbhuiyan Diabetic Center & Generel Hospital">

	<title>Dagonbhuiyan Hospital dulicate.</title>
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
	<!-----------------Bootstrap CSS--------------->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!---------------Font-awesome CSS------------------>
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!------------------Custom FONT-------------------->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light">
	<!-----------------Custom CSS-------------------->
	<link rel="stylesheet" href="assets/css/style.css">
	<!---------------Responsive CSS------------------->
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	<div class="full_site">
		<!------------------------Header Section--------------------------->
		<header id="header_section" class="mt-2">
			<!------------------Nav Top-Start------------------------->
			<div class="nav_top">
				<div class="container mt-1">
					<div class="row">
						<div class="col-sm-3">
							<ul class="email">
								<li><a href=""> <i class="fa fa-telegram"></i> ddcentercm2011@gmail.com</a></li>
							</ul>
						</div>
						<div class="col-sm-3">
							<ul class="social_links">
								<li><a href=""><i class="fa fa-facebook" style="color:#3B5998"></i></a></li>
								<li><a href=""><i class="fa fa-whatsapp" style="color:#00984B" ></i></a></li>
								<li><a href=""><i class="fa fa-linkedin" style="color:#0072B1"></i></a></li>
								<li><a href=""><i class="fa fa-instagram" style="color:#f46f30"></i></a></li>
							</ul>
						</div>
						<div class="col-sm-3 balnk_col"><a href="" class="cell_number">Contact : 01817-732042</a></div>
						<div class="col-sm-3">
							<a href="patient-info-login" class="btn btn-success float-right"><strong>PATIENT INFO</strong> </a>
						</div>
					</div>
						<div class="social_links float-right">

						</div>
					</div>
				</div>
			</div>
			<br>

			<!---------------------Nav Top End---------------------->
			<!--------------------Nav Middle Start------------------->
			<section  id="nav_middle_section">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<div class=" logo_area float-left">
								<div class="logo">
									<img src="images/logo.png" alt="logo">
								</div>
									<a href="index">DD<span>CGH</span></a>
							</div>
						</div>
						<div class="col-sm-9 nav_area">
							<div class="row">
								<div class="col-md-6">
									<div class="nav_icon">
										<i class="fa fa-phone"></i>
									</div>
									<div class="nav_con">
										<h6> <strong>Hotline:</strong>
										<a href="#" class="cell_number">01817-732042</a>
										<a href="#" class="cell_number">01839-979190</a> <br></h6>
										<strong><p>Our support team 24/7 ready for supporting you.</p></strong> 
									</div>
								</div>

								<div class="col-md-6">
									<div class="nav_icon">
										<i class="fa fa-map-marker" aria-hidden="true"></i>
									</div>
									<div class="nav_con" style="width:100%">
										<h6> <strong>Our location</strong>
										</h6>
										<strong><p>Puratan Dhak Bangla (Bypass Bosurhat Road),Dagonbhuiyan, Feni.</p></strong>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>
			<!----------------------End Middle nav bar--------------------->
			<!----------------------Main nav Start--------------------->
			<div id="main_nav" class="position-sticky">
				<div class="container">
					<nav class="navbar p-0 navbar-expand-lg navbar-light">

						<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
							<a href="index">
								<li class="nav-item <?= $current_page== 'index.php' ? 'active':''; ?>">Home
								</li>
							</a>
							<a href="doctors">
								<li class="nav-item <?= $current_page== 'doctors.php' ? 'active':''; ?>">doctors</li>
							</a>
							<!-- <a href="gallery">
								<li class="nav-item <?= $current_page== 'gallery.php' ? 'active':''; ?>">gallery</li>
							</a> -->

							<a href="services">
								<li class="nav-item <?= $current_page== 'services.php' ? 'active':''; ?>">our services</li>
							</a>
							
							<a href="about">
								<li class="nav-item <?= $current_page== 'about.php' ? 'active':''; ?>">About us</li>
							</a>
							
							<a href="contact-us">
								<li class="nav-item <?= $current_page== 'contact-us.php' ? 'active':''; ?>">contact us</li>
							</a>
						</ul>
						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search">
							<i class="fa fa-search"></i>
						</form>
							<div class="humberger" id="menu" onClick="myAnimate(this)">
								<div class="bar bar1"></div>
								<div class="bar bar2"></div>
								<div class="bar bar3"></div>
							</div>
						</div>
					</nav>
				</div>
			</div>			
			<!------------------Main nav End-------------------->
		</header>
		<!-------------------Hdeader section End----------------------->
