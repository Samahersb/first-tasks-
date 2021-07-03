
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robort";

try{
    $conn = new PDO("mysql:host=localhost; dbname=robort;" ,$username , $password);
    $conn->setAttribute (PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    
    }
    catch(PDOException $e){
       
    }  

if($_SERVER['REQUEST_METHOD']=='POST'){

    $Motor1 = $_POST['Motor1'];
    $Motor2 = $_POST['Motor2'];
    $Motor3 = $_POST['Motor3'];
    $Motor4 = $_POST['Motor4'];
    $Motor5 = $_POST['Motor5'];
    $Motor6 = $_POST['Motor6'];

    $sql= "INSERT INTO motors (Motor1, Motor2, Motor3, Motor4, Motor5, Motor6)
    VALUES ('$Motor1', '$Motor2', '$Motor3', '$Motor4', '$Motor5', '$Motor6');";

    echo " New record created successfully";
    
    $conn-> exec($sql);
}
$conn = null;
?>