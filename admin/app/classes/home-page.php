<?php

// namespace App\Contents;

// include 'database.php';
// $db = new App\database\Database;
// $dbCon = $db->databaseconn();

class Contents{

	public function dbCon(){
		$host = 'localhost';
		$username = 'root';
		$password = '';
		$database = 'ddcghospital';

		$dbcon = mysqli_connect($host,$username,$password,$database);
		return $dbcon;
	}

	public function themeColor($data){
		$themeColor = $data['themeColor'];

		$file = $_FILES['logo']['name'];
		$exp = explode('.',$file);
		$ed = end($exp);
		$up_logo = date("Ymd").'.'.$ed;

		$query = "INSERT INTO `insert_color`( `value`) VALUES ('$themeColor')";
		$link = mysqli_query($this->dbCon(),$query);
		if($link){
			$msg = "<h6 class='btn btn-success'>Theme color change Successfully!</h6>";
			return $msg;
		} else {
			$msg = "<h6 class='btn btn-warning'>Theme color could not change</h6>";
			return $msg;
		}

	}

	// public function theme_color_pick(){
	// 	$query = "SELECT `color_code` FROM `theme_color` INNER JOIN `insert_color` ON `insert_color`.`value`=`theme_color`.`id`";
	// 	$up_query = "UPDATE `color_code` FROM `theme_color` INNER JOIN `insert_color` ON `insert_color`.`value`=`theme_color`.`id`";
	// 	$pickColor = mysqli_query($this->dbCon(),$query);
	// 	return $pickColor;
	// }


}
