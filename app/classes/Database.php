<?php

namespace App\database\root;

class Database{

	public function data_con_root(){
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$db   = 'ddcghospital';

		$connectt = mysqli_connect($host,$user,$pass,$db);
		return $connectt;
	}
}
