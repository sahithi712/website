<?php
$servername = "localhost";
$username = "root";
$password = "";
 $mysqli_database ='donor';
 $conn = mysqli_connect($servername, $username, $password);
 // $db = mysql_connect($hostname, $user, $password,$mysql_database);
  mysqli_select_db($conn,$mysqli_database);
?>
