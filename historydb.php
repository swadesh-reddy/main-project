<?php 
include("connection.php");
$date= date("y-m-d, h:i:sa");
$username = $_SESSION['user'];
 	$sql = "INSERT INTO history (username, fpname, date) VALUES
       ('$username', '$productname', '$date');";
$result=mysqli_query($link, $sql);
?>