<?php

$dir = base64_decode($_GET['dir']);
$file = base64_decode($_GET['file']);

$file = $dir.$file;

header("content-disposition: attachment; filename=" .urlencode($file));
$fm = fopen($file, "r");

while(!feof($fm)){
     echo fread($fm, 8192);
     flush();
}

fclose($fm);
