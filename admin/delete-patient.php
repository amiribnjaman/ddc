<?php ob_start(); ?>
<?php 
include 'app/classes/add.php';
$add = new Add();
if($_GET['id']){
     $id = base64_decode($_GET['id']);
     $add->delete_patient($id);
     $url = "index.php?page=manage-patients";
     header("location: $url");
}
