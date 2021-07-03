<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robort";
$conn = new mysqli($servername, $username, $password, $dbname);

  $sql = "SELECT  Motor1, Motor2, Motor3, Motor4, Motor5, Motor6 FROM motors ORDER BY id desc LIMIT 1";
  $result = mysqli_fetch_assoc(mysqli_query($conn,$sql));
  foreach($result as $key => $item)
  {
    echo "$key: $item ";
  };
$conn->close();
?>