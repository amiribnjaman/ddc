<?php require_once 'include/header.php';?>
<?php

$id = base64_decode($_GET['id']);
// $id = $_GET['id'];
include 'app/classes/Doctor.php';
include 'admin/app/classes/add.php';
$add = new Add;
// $doc_info = $add->manage_doctor();

if($id){
	$result = $add->doctor_value($id);
}

$doctor = new Doctor;
if(isset($_POST['appointment'])){
	$msg = $doctor->doctor_appointment($_POST);
}

?>
<div id="doctors_section" class="doctors_appointment">
<div id="doctors_header" class="bg-light">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<nav>
					<ul>
						<li><h4>Doctor's Appointment</h4></li>
						<li class="float-right"><a href="index" class="text-success">Home / </a> <span> Doctor's Appointment</span></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>

<!---------------------Doctors Appoinmet---------------------->
<div class="doctors_appointment">
	<div class="container">
		<br>
		<form action="" method="POST">
			<h3 class="text-center">Make Doctor's <span> Appointment</span></h3>
			<hr>
			<div class="row">
				<div class="col-sm-5"></div>
				<div class="col-sm-7">
					<p><?= isset($msg) ? $msg:'';?></p>
				</div>

			</div>
			<div class="row">
				<div class="col-sm-5">

					<div class="doctor_box">
					<div class="row">
						<div class="col-sm-3">
							<div class="doctor_image">
								<img src="images/doctor.png" alt="">
							</div>
						</div>
						<div class="col-sm-9">
							<div class="doctor_info">
								<h5><i class="fa fa-user-md" aria-hidden="true"></i> <strong></strong><?= $result['doctors_name']; ?> </h5>
								<p class="txt-normal"><?= $result['qualification']; ?></p>
								<p class="txt-normal"><?= $result['department']; ?></p>
								<p class="text text-danger"><?= $result['position']; ?></p>
								<p class="txt-normal"><strong>Visiting Hour : <?= $result['visiting_hour']; ?> </strong></p>
								<!-- <hr>
								<p class="txt-normal"><strong>E-mail :</strong> <a href=""> kd@gmail.com </a></p> -->
							</div>
						</div>

						</div>
					</div>

				</div>
				<div class="col-sm-7 mb-4">
					<input type="text" style="text-transform:capitalize" value="" name="patient_name" placeholder="Patient Name *" class="form-control">

					<input type="email" style="text-transform:capitalize" value="" name="email" class="form-control" placeholder="Email Address">

					<input type="text" style="text-transform:capitalize" value="" name="phone_number" class="form-control" placeholder="Mobile Number. *">

					<input type="text" style="text-transform:capitalize" value="<?= $result['doctors_name']?>" name="doctor_name" class="form-control" placeholder="Doctor's Name">

					<input type="date"  value="" name="appointment_date" class="form-control" placeholder="Date *">

					<!-- <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Have any message? Please..."></textarea> -->

					<input type="submit" value="Make an Appointment" name="appointment" class="form-control submit" >
				</div>
			</div>
			<br>
		</form>
	</div>
</div>
</div>






<?php require_once 'include/footer.php'?>
<!-- disabled<?= $result['doctors_name']?> -->





