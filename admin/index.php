<?php 

session_start();
if(!isset($_SESSION['username'])){
  header('location:login.php');
}

$inactive = 600;
if(!isset($_SESSION['timeout']))
  $_SESSION['timeout'] = time() + $inactive;
  $session_life = time() - $_SESSION['timeout'];

  if($session_life > $inactive){
    session_destroy();
    header('location:login.php');
  }

$_SESSION['timeout'] = time();

?>

<?php require_once 'inc/header.php';?>
<?php

  if(isset($_GET['page'])){
    $page = $_GET['page'].'.php';
    require_once $page;
  } else {
    require_once 'dashboard.php';
  }

?>


<?php require_once 'inc/footer.php';?>
