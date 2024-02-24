<?php

include 'database.php';
use App\database\Database;

class Homepage{
	
	public function userInfo(){
		$username = $_SESSION['username'];
		$query = "SELECT * FROM `admin` WHERE `username`= '$username'";
		$userLink = mysqli_query(Database::databaseconn(),$query);
		return $userLink;
	}
}
