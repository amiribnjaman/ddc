<?php

include 'app/classes/add.php';


$add = new Add();
if($_GET['id'] && $_GET['manage-table']){
	$id = $_GET['id'];
	$add->delete_doctor($id);
	header('location:index.php?page=manage-doctors');
}


