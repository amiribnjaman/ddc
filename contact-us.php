<?php require 'include/header.php';?>
<?php

include 'app/classes/Doctor.php';

$page = explode('/',$_SERVER['PHP_SELF']);
$End = end($page);
$end = explode('.',$End);
$currnet_page = $end[0];

$doctor = new Doctor;
if(isset($_POST['send_message'])){
	$msg = $doctor->contact($_POST);
}

?>


<!--------------------Contact from design------------------>
<div id="contact_header" class="bg-light">
	<div class="container">
		<div class="row">
			<!-- <div class="col-sm-1"></div> -->
			<div class="col-sm-12">
				<nav>
					<ul>
						<li><h4>Contact Us</h4></li>
						<li><a href="index" class="text-success"><i class="fa fa-home" aria-hidden="true"></i> Home / </a> <span> CONTACT US</span></li>
					</ul>
				</nav>
			</div>
		</div>
		
	</div>
</div>
<!---------------------Contact form----------------- -->
<div class="contact_form" id="contact_page">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 col-lg-7">
				<h2> <strong>Get in touch</strong></span></h2>
				<p> <span style="color:red">*</span> Mark field is required</p>
				
				<form action="" method="POST" enctype="multipart/form-data">
					<form>
							<p><?= isset($msg) ? $msg:'';?></p>
							<div class="row">
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<label for="name">Your name <sup>*</sup></label>
										<input id="name" name="sender_name" type="text" class="form-control" required="">
									</div>
								</div>
								<div class="col-sm-6 col-md-6">
									<div class="form-group">
										<label for="email">Your Email <sup>*</sup></label>
										<input type="email" id="email" name="sender_email" class="form-control" required="">
									</div>
								</div>
							</div>
						<div class="form-group">
							<label for="send_message">Your message <sup>*</sup></label>
							<textarea class="form-control" name="sender_message" id="message" cols="30" rows="10" required=""></textarea>
						</div>
						<input type="submit" value="Send Message" class="contact_btn form-control text-center" name="send_message">
						<!-- <a href="#" class="contact_btn form-control text-center" name="send_message">Send Message</a> -->
				</form>
				<br>
			</div>
			<div class="col-sm-5 col-lg-5 contact_info">
				<h2>Contact INFO</h2>
				<p>Any time, Any how! We are commited to your service.</p>
				
				<div class="info">
					<hr>
					<h6><i class="fa fa-map-marker"></i> <strong> Location :</strong> Datch bangla road, Dagonbhuiyan, Feni</h6>
					<hr>
					<hr>
					<h6><i class="fa fa-mobile" aria-hidden="true"></i> <strong>Phone : 01817-732042, 01839-979190</strong></h6>
					<hr>
					<hr>
					<h6 class="email"><i class="fa fa-envelope" aria-hidden="true"></i> <strong> E-mail : ddcentercm2011@gmail.com</strong> </h6>
					<hr>
				</div>
				<br>
				<div class="book_appointment">
					<h3>Book an Appointment by Call</h3>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing!</p>
					<h5><strong><i class="fa fa-phone-square" aria-hidden="true"></i></strong></h5>
					<h5><strong><i class="fa fa-phone-square" aria-hidden="true"></i></strong></h5>
				</div>
			</div>
		</div>
	</div>
</div>


<!--------------------Google map location---------------------------->


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.370924807634!2d91.29897481409125!3d22.93656274761789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37535c3082495e6f%3A0x58aad7f1ae385a06!2sDagonbhuiyan%20Diabetic%20Center%20%26%20General%20Hospital!5e0!3m2!1sen!2sbd!4v1618071408108!5m2!1sen!2sbd" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

<!-- <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1000&amp;height=400&amp;hl=en&amp;q=dagonbhuiyan diabetic center & general hospital&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.embedmymap.com/">Embed My Map</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div> -->

<!--------------------Footer Section Start--------------------->
<?php require 'include/footer.php';?>
