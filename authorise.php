<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mainproject");
 
// Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $username=$_GET['username'];
 $password=$_GET['password'];
 

$_SESSION['user']=$username;
$sql = "INSERT INTO admin (username, password) VALUES ('$username', '$password');";
$sql .= "UPDATE register SET status ='authorised' WHERE   username = '$username'";
if($result=mysqli_multi_query($link, $sql))
{   
    echo "Records added successfully.";
	header("location: admin.php");	} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>