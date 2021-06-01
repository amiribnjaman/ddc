<?php

include 'app/classes/add.php';
$manage_doc = new Add();
$id = $_GET['id'];
$result = $manage_doc->doctor_value($id);


if(isset($_POST['update'])){
	$msg = $manage_doc->update_doctor($_POST,$id);	
}

// $pick_data = new Add();
// $id = $_GET['id'];
// $doc_info = $pick_data->doctor_value($id);

// $doc_info = $pick_data->manage_doctor();
// $row1 = mysqli_fetch_assoc($doc_info);


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
					<h3>Edit Doctor</h3>
					<hr>
					<form action="" method="POST" enctype="multipart/form-data">
						<?=  isset($msg) ? $msg:''; ?>
						<div class="form-group">
							<input type="text" placeholder="Doctor's Name" class="form-control" name="doctor_name" value="<?= $result['doctors_name']; ?>">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Department" class="form-control" name="department" value="<?= $result['department']; ?>">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Qualification" class="form-control" name="qualification" value="<?= $result['qualification']; ?>">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Position" class="form-control" name="position" value="<?= $result['position']; ?>">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Visiting Hour" class="form-control" name="visiting_hour" value="<?= $result['visiting_hour']; ?>">
						</div>
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

