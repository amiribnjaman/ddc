<?php

include 'database.php';
use App\database\Database;


class Login{

	public function userlogin($data){
		$username = $data['username'];
		$password = md5($data['password']);

		if(!empty($username && $password)){
			$query = "SELECT * FROM `admin_registration` WHERE `username` = '$username' AND `password` = '$password'";
			$con = mysqli_query(Database::databaseconn(),$query);
			$alldata = mysqli_fetch_assoc($con);
			$check = mysqli_num_rows($con);
			if($check == 1){
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header('location:index.php');
			}else{
				$msg = "<h6 class='alert alert-danger'>Username or password is Invalid!</h6>";
				return $msg;
			}

			
		}else{
			$msg = "<h6 class='alert alert-warning'>Please fill up all field!</h6>";
			return $msg;
		}
	}

}
