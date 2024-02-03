<?php

$dir = base64_decode($_GET['dir']);
$file = base64_decode($_GET['file']);

$file = $dir.$file;

?>


<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     
     <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/style.css">

     <style>
          body{background:gainsboro;};
     </style>
</head>
<body>

     <div id="image_page">
          <a href="patient">x</a>
          <img src="<?= $file; ?>" alt="">
     </div>

     <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
