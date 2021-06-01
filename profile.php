<?php 

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/style.css">


     <title>Document</title>
</head>
<body>
     <div id="profile_page">
          <h5>Welcome to your Profile</h5>
          <hr class="profile_hr">
          <div class="profile_box">
               <div class="img_box">
                    <img src="" alt="">
               </div>
               <div class="profile">
                         <div class="row mt-1">
                              <div class="col-sm-9"><input type="text" id="name" value="Name: <?= $_SESSION['name']; ?>" disabled="disabled" class="form-control class_disabled"></div>
                         </div>
                         <div class="row mt-1">
                              <div class="col-sm-9"><input type="text" id="name" value="Age: <?= $_SESSION['age']; ?>" disabled="disabled" class="form-control class_disabled"></div>
                         </div>
                         <div class="row mt-1">
                              <div class="col-sm-9"><input type="text" id="name" value="Gender: <?= $_SESSION['gender']; ?>" disabled="disabled" class="form-control class_disabled"></div>
                         </div>
                         <div class="row mt-1">
                              <div class="col-sm-9"><input type="text" id="name" value="Mobile: <?= $_SESSION['mobile']; ?>" disabled="disabled" class="form-control class_disabled"></div>
                         </div>
                         <hr>
                    <h6 class="text-left mt-2"><a href="patient" class="text-secondary"> <small><i class="fa fa-angle-double-left mr-2" aria-hidden="true"></i></small> Back</a></h6>
               </div>
          </div>
     </div>

     <script src="bootstrap.min.js"></script>
</body>
</html>
