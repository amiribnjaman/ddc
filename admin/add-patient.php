<?php 

include 'app/classes/add.php';
$add = new Add();

if(isset($_POST['save'])){
	$insert_msg = $add->patients_exam($_POST);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<!--------------Add patient--------------->
	<div class="add_doctor">
		<div class="container">
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<h3>Add Patient</h3>
					<hr>
					<?= isset($insert_msg)? $insert_msg: ''; ?>
					<form action="" method="POST" enctype="multipart/form-data">
						<?=  isset($msg) ? $msg:''; ?>
						<div class="form-group">
							<input type="text" placeholder="Patients's Name" class="form-control" name="patient_name">
						</div>

						<div class="form-group">
							<input type="text" placeholder="Age" class="form-control" name="age">
						</div>
						<div class="form-group">
							<select class="form-control" name="gender">
								<option value="">Gender</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-sm-4">
									<input type="text" placeholder="Mobile" class="form-control" name="mobile">
								</div>
								<div class="col-sm-4">
									<input type="text" placeholder="E-mail" class="form-control" name="email">
								</div>
								<div class="col-sm-4">
									<input type="text" placeholder="PMN" class="form-control" name="pmn">
								</div>
							</div>
						</div>


						<hr>
						<h6><strong>Examinations of the Patient</strong></h6>
						<hr>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<input type="text" placeholder="Test One" class="form-control" name="testone">
								</div>
								<div class="col-sm-6">
									<input type="text" placeholder="Result" class="form-control" name="result1">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<input type="text" placeholder="Test Two" class="form-control" name="testwo">
								</div>
								<div class="col-sm-6">
									<input type="text" placeholder="Result" class="form-control" name="result2">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<input type="text" placeholder="Test Three" class="form-control" name="testthree">
								</div>
								<div class="col-sm-6">
									<input type="text" placeholder="Result" class="form-control" name="result3">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="">Upload Reports</label> <i class="fa fa-arrow-down pl-1 fa-xs"></i>
						</div>

						<div class="form-group">
							<input type="file" class="form-control" name="tone_img">
						</div>
						<div class="form-group">
							<input type="file" class="form-control" name="ttwo_img">
						</div>
						<div class="form-group">
							<input type="file" class="form-control" name="tthree_img">
						</div>
						<!-- <div class="form-group">
							<input type="file" class="form-control" name="photo">
						</div> -->
						<div class="form-group col-sm-4">
							<input type="submit" value="Save" class="form-control btn btn-success" name="save">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
