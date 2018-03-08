<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mainproject");
 
// Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$username=$_POST['username'];
$password=$_POST['password'];

$query="select * from admin where username='$username' and password='$password'";
$result=mysqli_query($link,$query);
$row=mysqli_num_rows($result);
if($row==1)
{

	   $_SESSION['user']=$username;
		echo "<script type='text/javascript'>if(confirm('Login Successfull')){document.location.href='admin.php'}</script>";
		
}
else
{
	echo "<script type='text/javascript'>if(confirm('Invalid Username/Password')){document.location.href='adminlogin.php'}</script>";
	
	session_unset();
}

mysqli_close($link);
?>