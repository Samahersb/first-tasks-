<?php

$servername = "localhost";
$username = "root";
$password = "";
$db= new PDO("mysql:host=localhost; dbname=robort;" ,$username , $password);

 if($db){

    echo " database is connected";
 }
?>
