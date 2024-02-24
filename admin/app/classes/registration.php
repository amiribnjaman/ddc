<?php

include 'database.php';
use App\database\Database;

class Registration{

	public function register($data){
		$firstname = $data['firstname'];
		$lastname = $data['lastname'];
		$username = $data['username'];
		$email = $data['email'];
		$password = $data['password'];
		$confirm_password = $data['confirm_password'];

		$usercheck = "SELECT * FROM `admin` WHERE `username` = '$username'";
		$userquery = mysqli_query(Database::databaseconn(),$usercheck);
		$username_check = mysqli_num_rows($userquery);

		if(!empty($firstname && $lastname && $username && $email && $password && $confirm_password )){
			if(strlen($firstname) > 2 && strlen($lastname) > 2){
				if($username_check == 0){
					if(strlen($password) >= 8){
						if($password == $confirm_password){
							$password = md5($password);
							$query = "INSERT INTO `admin_registration`(`firstname`, `lastname`, `username`, `email`, `password`, `status`) VALUES ('$firstname','$lastname','$username','$email','$password','inactive')";
							mysqli_query(Database::databaseconn(),$query);
							$msg = "<h6 class='alert alert-success'>Congrates! You have registered successfully! Now you can <a href='login.php'>Login</a></h6>";
							return $msg;
						}else{
							$msg = "<h5 class='alert alert-warngin'>Confirm password does not matched.</h5>";
							return $msg;
						}
					}else{
						$msg = "<h5 class='alert alert-info'>Please insert a storng password.</h5>";
						return $msg;
					}
				} else {
					$msg = "<h5 class='alert alert-info'>Username already exits.</h5>";
					return $msg;
				}
				
			}else{
				$msg = "<h5 class='alert alert-info'>Firstname or Lastname is too short.</h5>";
				return $msg;
			}
		}else{
			$msg = "<h5 class='alert alert-warning'>Field must not be empty.</h5>";
			return $msg;
		}

	}
}
