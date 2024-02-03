<?php

session_start();
if(isset($_SESSION['menu_no'])){
  header('location:patient');
}
include_once 'Database.php';

use App\database\root\Database;


class PatientInfo{

	public $menu= '';

	public function patient_info($data){
		$this->menu = $data['menu_no'];
		$mobile_number = $data['mobile_number'];

		$query = "SELECT * FROM `patient_exam` WHERE `menu`='$this->menu'";
		$result = mysqli_query(Database::data_con_root(),$query);
		$row = mysqli_fetch_assoc($result);

		if(!empty($this->menu && $mobile_number)){
			if($this->menu == $row['menu'] && $mobile_number == $row['mobile']){
				$_SESSION['menu_no'] = $data['menu_no'];
				$_SESSION['mobile'] = $row['mobile'];
				$_SESSION['name'] = $row['patient_name'];
				$_SESSION['age'] = $row['age'];
				$_SESSION['gender'] = $row['sex'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['tone_name'] = $row['tone_name'];
				$_SESSION['tone_result'] = $row['tone_result'];
				$_SESSION['ttwo_name'] = $row['ttwo_name'];
				$_SESSION['ttwo_result'] = $row['ttwo_result'];
				$_SESSION['tthree_name'] = $row['tthree_name'];
				$_SESSION['tthree_result'] = $row['tthree_result'];

				$_SESSION['tone_img'] = $row['tone_img'];
				$_SESSION['ttwo_img'] = $row['ttwo_img'];
				$_SESSION['tthree_img'] = $row['tthree_img'];

				header('location:patient');
			} else {
				$msg = "<p class='alert alert-warning'>Sorry! Data not found.</p>";
				return $msg;
			}
		} else {
			$msg = "<p class='alert alert-danger'>Please insert valid PMN no. and Mobile number.</p>";
			return $msg;
		}

	}

	public function patient_data(){
		$menu = $this->menu;
		$query = "SELECT * FROM `patient_exam` WHERE `menu`='$menu'";
		$result = mysqli_query(Database::data_con_root(),$query);
		return $result;
	}
}
