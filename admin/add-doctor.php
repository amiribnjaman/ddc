<?php

include 'app/classes/add.php';
$addDoctor = new Add();
if(isset($_POST['save'])){
	$msg = $addDoctor->add_doctor($_POST);

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
	<!--------------Add doctor--------------->
	<div class="add_doctor">
		<div class="container">
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
					<h3>Add Doctor</h3>
					<hr>
					<form action="" method="POST" enctype="multipart/form-data">
						<?=  isset($msg) ? $msg:''; ?>
						<div class="form-group">
							<input type="text" placeholder="Doctor's Name" class="form-control" name="doctor_name">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Department" class="form-control" name="department">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Qualification" class="form-control" name="qualification">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Position" class="form-control" name="position">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Visiting Hour" class="form-control" name="visiting_hour">
						</div>
						<div class="form-group">
							<input type="file" class="form-control" name="photo">
						</div>
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
