<?php

include 'Database.php';

use App\database\root\Database;

class Doctor{

	public function doctor_appointment($data){
		$patient_name  = $data['patient_name'];
		// $email         = $data['email'];
		$phone_number  = $data['phone_number'];
		$doctor_name   = $data['doctor_name'];
		// $department   = $data['department'];
		// $message       = $data['message'];



		if(!empty($patient_name && $phone_number)){
			$email = 'example@mail.com';
			$message = 'this is message';
			$query = "INSERT INTO `doctor_appointment`(`patient_name`,`email`,`phone_number`,`doctor_name`,`message`) VALUES ('$patient_name','$email','$phone_number','$doctor_name','$message')";

				//$department

			$result = mysqli_query(Database::data_con_root(),$query);
			if($result){
				$msg = "<h6 class='form-control btn btn-info' style='color:#fff'>Your Appointment message has sent!<h6>";
				return $msg;
			}
		} else {
			$msg = "<h6 class='btn btn-warning form-control m-0 mb-2' style='color:#fff'>Please, Fill-up all require field</h6>";
			return $msg;
		}
		

	}

	public function contact($data){
		$sender_name = $data['sender_name'];
		$sender_email = $data['sender_email'];
		$sender_message = $data['sender_message'];

		if(!empty($sender_name && $sender_email && $sender_message)){
			$query = "INSERT INTO `message`(`sender_name`,`sender_email`,`sender_message`) VALUES ('$sender_name','$sender_email','$sender_message')";
			
			$result = mysqli_query(Database::data_con_root(),$query);
			if($result){
				$msg = "<h6 class='form-control btn btn-info'>Message has sent!</h6>";
				return $msg;
			}
		} else {
			$msg = "<h6 class='form-control btn btn-warning'>Something wrong!</h6>";
			return $msg;
		}

	}

	public function appointment_request(){
		$query = "SELECT * FROM `doctor_appointment`";
		$result = mysqli_query(Database::data_con_root(),$query);
		return $result;
	}

	public function sent_message(){
		$query = "SELECT * FROM `message`";
		$result = mysqli_query(Database::data_con_root(),$query);
		return $result;
	}

	public function app_req_delete($id){
		$query = "DELETE FROM `doctor_appointment` WHERE `id`='$id'";
		mysqli_query(Database::data_con_root(),$query);
	}

	public function msg_delete($id){
		$query = "DELETE FROM `message` WHERE `id`='$id'";
		mysqli_query(Database::data_con_root(),$query);
	}

	public function user_sender_data(){

	}
}
