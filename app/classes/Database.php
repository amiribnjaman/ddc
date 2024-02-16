<?php

namespace App\database\root;

class Database{

	public static function data_con_root(){
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$db   = 'ddcghospital';

		$connect = mysqli_connect($host,$user,$pass,$db);
		return $connect;
	}
}
