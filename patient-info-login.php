<?php

include_once 'app/classes/Patient_info.php';

// if(isset($_SESSION['menu_no'])){
// 	header('location:patient.php');
// }

$patient_info = new PatientInfo;


if(isset($_POST['patient_info'])){
	$msg = $patient_info->patient_info($_POST);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DDC&GH ltd. Patient portal</title>
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">


</head>
<body>
	<br>
	<br>
	<br>
	<div id="patient_info">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<h2 class="text-center">Patient Info <span>Login</span></h2>
					<?= isset($msg) ? $msg:'' ?>
					<br>
					<form action="" method="POST">
						<input type="text" class="form-control mb-2" placeholder="PMN No." name="menu_no">
						<input type="text" class="form-control mb-2" placeholder="Mobile Number" name="mobile_number">
						<input type="submit" value="submit" class="form-control patient_info_btn" name="patient_info">
					</form>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-5 mb-3">
					<br>
					<p style="font-weight:bolder" class="notice"><span class="text-success">Note:</span> You have to insert actual PMM no. and Mobile number that Hospital authority provide you to access or see Patient informaton. Thank You! </p>
						<p class="text-center" style="margin-top:20px"><span class="text-success">For example </span></p>
						<hr style="width:30%;margin:auto">
						<br>
						<div class="row form-group">
							<div class="col-sm-4">
								<p><span style="font-weight:bolder">PMM No :</span></p>
							</div>
							<div class="col-sm-8">
								<input type="text" value="12345678" class="form-control class_disabled" disabled="disabled">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-4">
								<p><span style="font-weight:bolder">Mobile Number:</span></p>
							</div>
							<div class="col-sm-8">
								<input type="text" value="018345*****" class="form-control class_disabled" disabled="disabled">
							</div>
						</div>
					<hr>
					<a href="index"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
