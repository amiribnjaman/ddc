<?php

namespace App\database;

class Database{

	public static function databaseconn(){
		$host     = 'localhost';
		$username = 'root';
		$password = '';
		$database = 'ddcghospital';

		$dbcon = mysqli_connect($host,$username,$password,$database);
		return $dbcon;
	}
}
