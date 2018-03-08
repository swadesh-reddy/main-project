<?php 
session_start();
$_SESSION['user'];
include('connection.php');
$sql = "DELETE FROM history where username = '".$_SESSION['user']."'";
$result = mysqli_query($link, $sql);
if($result == true)
{
	header('location: searchedhistory.php');
}
else
{
	echo ("ERROR: ".mysqli_error()); 
}

?>