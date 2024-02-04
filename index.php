<?php

if(isset($_SESSION['menu_no'])){
	header('location:patient.php');
}
require_once 'include/header.php';

include 'app/classes/Doctor.php';
include 'admin/app/classes/add.php';
$add = new Add;
$allDoc = $add->manage_doctor();

$doctor = new Doctor;
if(isset($_POST['appointment'])){
	$msg = $doctor->doctor_appointment($_POST);
}

?>

		<!-----------------------Slider Section Start------------------------------->
		<section id="slider_section">
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
				<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/slider1.jpg" class="d-block w-100" alt="1st Slider">
				</div>
				<div class="carousel-item">
					<img src="images/slider2.jpg" class="d-block w-100" alt="2nd Slider">
				</div>
				<div class="carousel-item">
					<img src="images/slider4.jpg" class="d-block w-100" alt="3rd Slider">
				</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
				</a>
			</div>
		</section>
		<!--------------------Slider section End-------------------------->
		<!----------------------------Services section start----------------------------->
		<section id="services_section">
			<div class="container mt-4">
				<div class="services-row row">
					<div class="col-sm-12">
						<!-- <div class="services">
							<h3>Our <strong>Services</strong></h3>
							<p>Human service is our only goal and we have always provided a number of services for you to reach our goal. We will make the following services the most important for your needs.</p>
						</div> -->
						<div class="row g-5">
							<div class="services-card col-sm mr-4">
								<div class="services_con">
									<i></i><h5>Doctor's Chamber</h5>
									<p>Se sé cospetto furono bene che noia oppinione esperienza alcun.</p>
									<a href="#">read more &rarr;</a>
								</div>
							</div>
							<div class="services-card col-sm mr-4">
								<div class="services_con">
									<i></i><h5>Pathology</h5>
									<p>Se sé cospetto furono bene che noia oppinione esperienza alcun.</p>
									<a href="#">read more &rarr;</a>
								</div>
							</div>
							<div class="services-card col-sm mr-4">
								<div class="services_con">
									<i></i><h5>Gynecology</h5>
									<p>Se sé cospetto furono bene che noia oppinione esperienza alcun.</p>
									<a href="#">read more &rarr;</a>
								</div>
							</div>
							<div class="services-card col-sm">
								<div class="services_con">
									<i></i><h5>Diagnostic </h5>
									<p>Se sé cospetto furono bene che noia oppinione esperienza alcun.</p>
									<a href="#">read more &rarr;</a>
								</div>
							</div>
						</div>


						
					</div>
				</div>
			</div>
		</section>
		<!-------------------------Service section end-------------------------->

		<!-------------------------WHY US with FAQ section Start-------------------------->
		<section class='row why-us-section'>
			<!-----------FAQ -->
			<div class='col-sm mr-4'>
				<h3>FAQ's</h3>
				<img src="./assets/images/border.svg" alt="">

				<div class="accordion">
					
				<div class="section">
				<a class="section-title" href="#accordion-1">What is the difference between lease and licence agreement?</a>
				<div id="accordion-1" class="section-content">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet 
				aliquam libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
				Nunc ac eros urna. Duis tempor lacinia diam a condimentum. Fusce rutrum, ipsum 
				quis ultrices eleifend, eros urna finibus dui, molestie aliquam enim ipsum 
				sed tellus. Cras nibh ante, fringilla vel magna in, pharetra congue ligula.</p>
				</div><!-- section-content end -->
				</div><!-- section end -->

				<div class="section">
				<a class="section-title" href="#accordion-2">How ownership of property is acquired by a person?</a>
				<div id="accordion-2" class="section-content">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet 
				aliquam libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
				Nunc ac eros urna. Duis tempor lacinia diam a condimentum. Fusce rutrum, ipsum 
				quis ultrices eleifend, eros urna finibus dui, molestie aliquam enim ipsum 
				sed tellus. Cras nibh ante, fringilla vel magna in, pharetra congue ligula.</p>
				</div><!-- section-content end -->
				</div><!-- section end -->
				<div class="section">
				<a class="section-title" href="#accordion-3">Can a registered will be rectified or changed?</a>
				<div id="accordion-3" class="section-content">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sit amet 
				aliquam libero. Interdum et malesuada fames ac ante ipsum primis in faucibus. 
				Nunc ac eros urna. Duis tempor lacinia diam a condimentum. Fusce rutrum, ipsum 
				quis ultrices eleifend, eros urna finibus dui, molestie aliquam enim ipsum 
				sed tellus. Cras nibh ante, fringilla vel magna in, pharetra congue ligula.</p>
				</div><!-- section-content end -->
				</div><!-- section end -->
				
				</div><!-- accordion end -->				
			</div>
			<!-------------WHY US------->
			<div class='col-sm ml-4'>
				<h3>WHY <strong>US?</strong> </h3>

				<img src="./assets/images/border.svg" alt="">
				<div>
					<div>
					<h5>Great Infrastructure</h5>
					<p>Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit.</p>
				</div>
					<div>
					<h5>24/7 Ambulance Services</h5>
					<p>Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit.</p>
				</div>
					<div>
					<h5>Cutting Edge Technology</h5>
					<p>Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit.</p>
				</div>
					<div>
					<h5>Experienced Doctors & Skilled</h5>
					<p>Nunc at pretium est curabitur commodo leac est venenatis egestas sed aliquet auguevelit.</p>
				</div>
				</div>
			</div>
		</section>
		<!-------------------------WHY US with FAQ section end-------------------------->

		<!-- <hr> -->
				<!--------------------------------Notice Section------------------------>
				<div class='notice-section'>
					<div class="row notice_area">
					<div class="col-sm-4">
						<div class="notice">
							<h3>Important <br><strong>Notice</strong></h3>
							<br>
						</div>
					</div>
					<div class="col-sm-8">
							<div class="notice_con">
								<div class="thumbnail_img">	
									<img src="" alt="">
								</div>
								<div class="thumbnail_con">
									<a href="#">ICT for Chikungunya IgG/IgM</a>
									<p>Et no lorem est no eos kasd sadipscing.  <strong class="font-size:15px"> Labore aliquyam et</strong> clita sed sea justo takimata, kasd lorem sed et Et no lorem est no eos kasd sadipscing. Labore aliquyam <strong class="font-size:15px">Nov 12, 2020.</strong></p>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-5">
									<a href="#"><i class="fa fa-ambulance fa-flip-horizontal fa-2x"></i> <span>Call for Ambulance</span></a>
								</div>
								<div class="col-sm-5">
									<a href="#hints_section"><i class="fa fa-building fa-flip-horizontal fa-2x"></i><span>Doctor's Appointment</span></a>
								</div>
							</div>
					</div>
					</div>
					</div>
				</div>
				</div>


		<!--------------------Hints section start-------------------------->
		<section id="hints_section">
			<h3 class="text-center">Doctor's <strong>Appointment</strong></h3>
			<img src="./assets/images/border.svg" alt="">

			<p class="text-center">Our hospital has a bunch of experienced doctors who are always engaged to served you. And we have been in your yard for almost a decade with the help of those who have become a trusted hospital to serve you. So, You fill out the form below to make a doctor's appointment. </p>

			<!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt tempora dolor facilis voluptates libero. <span> Provident dolore beatae quod exercitationem sequi quas at illum consequatur accusamus, quaerat deleniti, doloribus aspernatur......</span> -->
			<!-- <div class="full_hints">
			</div> -->
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-sm-1"></div>
						<div class="col-sm-10 col-md-10 col-lg-8">
							<form action="" method="POST">
								<p><?= isset($msg) ? $msg:'';?></p>
								<h6 class="text-left"><sup>* </sup>Marked field is required.</h6>
								<input type="text" class="form-control" placeholder="Patient Name *" name="patient_name">
								<input type="email" class="form-control" placeholder="Email" name="email">
								<input type="text" class="form-control" placeholder="Phone Number *" name="phone_number">
								<input type="date" class="form-control" placeholder="Set date">
								<select name="department" id="" class="form-control">
									<option value="" class="first_option">Select Department <sup>*</sup></option>
									<option value=""></option>
									<option value=""></option>
									<option value=""></option>
								</select>
								<select name="doctor_name" id="" class="form-control">
									<option value="" class="first_option">Select Doctor <sup>*</sup></option>
									<?php while($doc = mysqli_fetch_assoc($allDoc)){?>
									<option value="<?= $doc['doctors_name'];?>"><?= $doc['doctors_name'];?></option>
									<?php } ?>
								</select>
								<textarea name="message" id="" cols="" rows="4" class="form-control" placeholder="Have you any message? Please!"></textarea>
								<input type="submit" class="btn btn-success form-control" name="appointment" value="Make an Appointment">
							</form>
						</div>
					</div>
				</div>
		</section>
		<hr>
		<!----------------------------Hints section end------------------------------->
		
		<!--------------------Testimonila section start------------------------>
		<!-- <section id="testimonial_section">
			<div class="container">
				<div class="testi_contain">
					<div class="row">
						<div class="col-sm-9"></div>
						<div class="col-sm-3">
							<h3>Our <strong>Department</strong></h3>
						</div>

					</div>
				</div>
			</div>
		</section> -->
		<!-------------------Tesimonila section end-------------------->

		<!------------------Short Description section end----------------------->
		<section id="short_description">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="content">
							<h4>Takimata rebum diam et gubergren sed et.</h4>
							<p>Lorem labore accusam labore diam aliquyam dolore diam. Et clita sadipscing clita diam sed sadipscing, invidunt ipsum sit nonumy dolor no at takimata takimata, lorem labore lorem eos magna vero, ut amet et sed no. Elitr labore takimata clita takimata.</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="button">
							<a href="#">Know more Details</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-----------------------Short Description end------------------------>
		<!-----------------------Doctors Meet section------------------------->
		<section id="doctor_meet">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12">
						<h4>Meet Our <strong>Doctors</strong></h4>	
						<br>
						<p>Our hospital has a bunch of experienced doctors who are always engaged to served you. And we have been in your yard for almost a decade with the help of those who have become a trusted hospital to serve you. <br><br>
						Don't be panic, find our best doctor as your need, take best service and stay always happy.</p>
						<br>
						<div class="buttons">
							<a href="doctors">ALL DOCTORS</a>
							<a href="#">TODAY'S DOCTORS</a>
						</div>
					</div>
					
					<div class="col-sm-6 d-none d-md-block">
						
						<?php 
							while($doc = mysqli_fetch_assoc($allDoc)){ ?>
						<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
						<div class="carousel-inner">
								<div class="carousel-item active">
									<img src="..." class="d-block w-100 h-50" alt=""><br>
									<div class="doc_info text-center">
										
										<h6>Department</h6>
										<p>Qualification</p>
										<p>Visiting Hour</p>
									</div>
								</div>

						<?php } ?>
					
						<!-- <div class="carousel-item">
							<img src="..." class="d-block w-100" alt="2nd Slider">
						</div>
						<div class="carousel-item">
							<img src="..." class="d-block w-100" alt="3rd Slider">
						</div> -->
						</div>
						<!-- <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
						</a> -->
					</div>
					</div>
				</div>
			</div>
		</section>
		<!----------------------Doctors meet End---------------------->
		<!-------------------latest technology start------------------->
		<section class='latest-technology' id="latest_technology">
			<div class="technology_content">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<h3>Our latest <span>Technology</span></h3>
						</div>
						<div class="col-sm-9">
							<p>Gesänge getäuscht seh geneigt um besitze irrt. Zerstoben fühl mich schatten manche zauberhauch vom was  nun, was busen mein stillen herz sich naht irren erschüttert,  ihr umwittert nun auf einer tönen unbestimmten noch macht. Schwebet wieder zu wenn auf zerstreuet die weich ihr aufn.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="technology_slider">
				<div id="technologyCarousel" class="carousel slide carousel-fade" data-ride="carousel">
				<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/technology1.jpg" class="d-block w-100" alt="">
				</div>
				<div class="carousel-item">
					<img src="images/technology2.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="images/technology3.jpg" class="d-block w-100" alt="...">
				</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
				<div class="controller first_controller">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</div>
				</a>
				<a class="carousel-control-next" href="#technologyCarousel" role="button" data-slide="next">
				<div class="controller last_controller">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</div>
				</a>
			</div>
			</div>
		</section>
		<!----------------------Latest technology end-------------------------->

<?php require_once 'include/footer.php'?>
