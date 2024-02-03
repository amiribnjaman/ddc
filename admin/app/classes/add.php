<?php

include_once 'database.php';
use App\database\Database;

class Add{

	public function add_doctor($data){
		$doctor_name   = $data['doctor_name'];
		$department    = $data['department'];
		$qualification = $data['qualification'];
		$position      = $data['position'];
		$visiting_hour = $data['visiting_hour'];

		// $image = $_FILES['photo']['name'];
		// $ex = explode('/',$_FILES['photo']['name']);
		// print_r($ex);
		// exit;
		// $end = end($ex);
		// print_r($end);
		// exit;

		if(!empty($doctor_name && $department && $qualification && $position && $visiting_hour)){
			$query = "INSERT INTO `doctors`(`doctors_name`, `department`, `qualification`, `position`, `visiting_hour`) VALUES ('$doctor_name','$department','$qualification','$position','$visiting_hour')";
			$doctor_insert = mysqli_query(Database::databaseconn(), $query);
			if($doctor_insert){
				$msg = "<h5 class='btn btn-success form-control'>Data insert success!</h5>";
				return $msg;
			}

		} else {
			$msg = "<h5 class='btn btn-warning form-control'>Something wrong!</h5>";
			return $msg;
		}

	}

	public function manage_doctor(){
		$query = "SELECT * FROM `doctors`";
		$man_doc = mysqli_query(Database::databaseconn(),$query);
		return $man_doc;
	}


	public function update_doctor($data,$id){
		$doctor_name   = $data['doctor_name'];
		$department    = $data['department'];
		$qualification = $data['qualification'];
		$position      = $data['position'];
		$visiting_hour = $data['visiting_hour'];

		$query = "UPDATE `doctors` SET `doctors_name`='$doctor_name',`department`='$department',`qualification`='$qualification',`position`='$position',`visiting_hour`='$visiting_hour' WHERE `id`='$id'";
		
		if(!empty($doctor_name || $department || $qualification || $position || $visiting_hour)){
			$result = mysqli_query(Database::databaseconn(),$query);
			
			if($result){
				$msg = "<h5 class='form-control btn btn-success'>Updated Success!</h5>";
				return $msg;
			}
		} else {
			$msg = "<h5 class='form-control btn btn-warning'>Something wrong!</h5>";
			return $msg;
		}
	}

	
	public function doctor_value($id){
		$query = "SELECT * FROM `doctors` WHERE `id` = '$id'";
		$man_doc = mysqli_query(Database::databaseconn(),$query);
		$result = mysqli_fetch_assoc($man_doc);
		return $result;			
	}

	public function delete_doctor($id){
		$query = "DELETE FROM `doctors` WHERE `id`='$id'";
		mysqli_query(Database::databaseconn(),$query);
	}

	public function patients_exam($data){
		$patient_name = $data['patient_name'];
		$patient_age = $data['age'];
		$patient_gender = $data['gender'];
		$mobile = $data['mobile'];
		$pmn = $data['pmn'];
		$email = $data['email'];
		$tone = $data['testone'];
		$result1 = $data['result1'];
		$ttwo = $data['testwo'];
		$result2 = $data['result2'];
		$tthree = $data['testthree'];
		$result3 = $data['result3'];

		$img = $_FILES['tone_img']['name'];
		$img = explode('.',$img);
		$end = end($img);
		$tone_img = $pmn . 'a' .'.'. $end;

		$img = $_FILES['ttwo_img']['name'];
		$img = explode('.',$img);
		$end = end($img);
		$ttwo_img = $pmn . 'b' .'.'. $end;

		$img = $_FILES['tthree_img']['name'];
		$img = explode('.',$img);
		$end = end($img);
		$tthree_img = $pmn . 'c' .'.'. $end;

		$query = "INSERT INTO `patient_exam` (`patient_name`, `age`, `sex`,`mobile`,`menu`,`email`, `tone_name`, `tone_result`, `ttwo_name`, `ttwo_result`, `tthree_name`, `tthree_result`, `tone_img`, `ttwo_img`, `tthree_img`) VALUES('$patient_name','$patient_age','$patient_gender','$mobile','$pmn','$email','$tone','$result1','$ttwo','$result2','$tthree','$result3','$tone_img','$ttwo_img','$tthree_img')";

		$data = mysqli_query(Database::databaseconn(), $query);

		if($data){
			move_uploaded_file($_FILES['tone_img']['tmp_name'], '../uploads/'.$tone_img);
			move_uploaded_file($_FILES['ttwo_img']['tmp_name'], '../uploads/'.$ttwo_img);
			move_uploaded_file($_FILES['tthree_img']['tmp_name'], '../uploads/'.$tthree_img);

			$msg = "<h6 class='alert alert-primary'>Patients exam information inserted.</h6>";
			return $msg;
		} else {
			$msg = "<h6 class='alert alert-danger'>Something went wrong</h6>";
			return $msg;
		}
	}

	public function patient_exam_data(){
		$query = "SELECT * FROM `patient_exam`";
		$result = mysqli_query(Database::databaseconn(), $query);
		return $result;
	}

	public function edit_patient_exam($id){
		$query = "SELECT * FROM `patient_exam` WHERE `id` = '$id'";
		$result = mysqli_query(Database::databaseconn(),$query);
		return $result;
	}

	public function update_patient($data, $id){
		$patient_name = $data['patient_name'];
		$patient_age = $data['age'];
		$patient_gender = $data['gender'];
		$mobile = $data['mobile'];
		$pmn = $data['pmn'];
		$email = $data['email'];
		$tone = $data['testone'];
		$result1 = $data['result1'];
		$ttwo = $data['testwo'];
		$result2 = $data['result2'];
		$tthree = $data['testthree'];
		$result3 = $data['result3'];

		$img = $_FILES['tone_img']['name'];
		$img = explode('.',$img);
		$end = end($img);
		$tone_img = $pmn . 'a' .'.'. $end;

		$img = $_FILES['ttwo_img']['name'];
		$img = explode('.',$img);
		$end = end($img);
		$ttwo_img = $pmn . 'b'.'.'. $end;

		$img = $_FILES['tthree_img']['name'];
		$img = explode('.',$img);
		$end = end($img);
		$tthree_img = $pmn . 'c' .'.'. $end;

		$query = "UPDATE `patient_exam` SET `patient_name`='$patient_name',`age`='$patient_age',`sex`='$patient_gender',`mobile`='$mobile',`menu`='$pmn',`email`='$email',`tone_name`='$tone',`tone_result`='$result1',`ttwo_name`='$ttwo',`ttwo_result`='$result2',`tthree_name`='$tthree',`tthree_result`='$result3',`tone_img`='$tone_img',`ttwo_img`='$ttwo_img',`tthree_img`='$tthree_img' WHERE `id`='$id'";

		$data = mysqli_query(Database::databaseconn(), $query);
		if($data){
			move_uploaded_file($_FILES['tone_img']['tmp_name'], '../uploads/'.$tone_img);
			move_uploaded_file($_FILES['ttwo_img']['tmp_name'], '../uploads/'.$ttwo_img);
			move_uploaded_file($_FILES['tthree_img']['tmp_name'], '../uploads/'.$tthree_img);

			$msg = "<h6 class='alert alert-primary'>Updated Success.</h6>";
			return $msg;
		} else {
			$msg = "<h6 class='alert alert-danger'>Something went wrong</h6>";
			return $msg;
		}
	}

	public function delete_patient($id){
		$query = "DELETE FROM `patient_exam` WHERE `id`='$id'";
		mysqli_query(Database::databaseconn(), $query);
		header('location:index.php?page=manage-patients');
	}

}
