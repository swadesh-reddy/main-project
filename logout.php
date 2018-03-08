<?php
session_start();
if(isset($_SESSION['user']) && !empty($_SESSION['user']))
{
	session_unset();
	echo "<script type='text/javascript'>if(confirm('Logout Successfull')){document.location.href='userlogin.php'}</script>";
}
else
{
	header("Location:userlogin.php");
}
?>