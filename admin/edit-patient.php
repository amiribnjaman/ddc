<?php 
include 'app/classes/add.php';
$patient = new Add();

$id = $_GET['id'];
$id = base64_decode($id);

$data = $patient->edit_patient_exam($id);

if(isset($_POST['update'])){
     $update_data = $patient->update_patient($_POST, $id);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     	<!--------------Edit doctor--------------->
	<div class="add_doctor">
		<div class="container">
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<h3>Add Patient</h3>
					<hr>
					<?= isset($update_data)? $update_data: ''; ?>

                         <?php $data = mysqli_fetch_assoc($data);?>
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<input type="text" placeholder="Patients's Name" class="form-control" name="patient_name" value="<?= $data['patient_name']; ?>">
						</div>

						<div class="form-group">
							<input type="text" placeholder="Age" class="form-control" name="age" value="<?= $data['age']; ?>">
						</div>
						<div class="form-group">
							<select class="form-control" name="gender">
								<option value=""><?= $data['sex'];?></option>
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
									<input type="text" placeholder="Test One" class="form-control" name="testone" value="<?= $data['tone_name']; ?>">
								</div>
								<div class="col-sm-6">
									<input type="text" placeholder="Result" class="form-control" name="result1" value="<?= $data['tone_result']; ?>">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<input type="text" placeholder="Test Two" class="form-control" name="testwo" value="<?= $data['ttwo_name']; ?>">
								</div>
								<div class="col-sm-6">
									<input type="text" placeholder="Result" class="form-control" name="result2" value="<?= $data['ttwo_result']; ?>">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
									<input type="text" placeholder="Test Three" class="form-control" name="testthree" value="<?= $data['tthree_name']; ?>">
								</div>
								<div class="col-sm-6">
									<input type="text" placeholder="Result" class="form-control" name="result3" value="<?= $data['tthree_result']; ?>">
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
							<input type="submit" value="Update" class="form-control btn btn-success" name="update">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
