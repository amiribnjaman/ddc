<?php

include 'Doctor.php';
include '../../admin/app/classes/add.php';
$add = new Add;
$doctor = new Doctor;

if($_GET['page']=='appointment'){
	if($_GET['id'] && $_GET['page']){
		$id = $_GET['id'];
		$page = $_GET['doctor-appointment'];
		$doctor->app_req_delete($id);
		header('location:../../admin/index.php?page=doctor-appointment');
	}
}

if($_GET['page']=='message'){
	if($_GET['id'] && $_GET['page']){
		$id = $_GET['id'];
		$doctor->msg_delete($id);
		header('location:../../admin/index.php?page=message');
	}
}

if($_GET['page']=='patientmanage'){
	if($_GET['id'] && $_GET['page']){
		$id = $_GET['id'];
		$add->delete_patient($id);
		$url = "../../admin/index.php?page=manage-patients";
		header("location: $url");
	}
}

