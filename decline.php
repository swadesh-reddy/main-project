<?php 
session_start();
$_SESSION['user'];
	$link = mysqli_connect("localhost", "root", "", "mainproject");
    // Check connection
	$friend = $_GET['friend'];
	if($link == false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 $sql = " DELETE FROM request WHERE username = '$friend' AND friendname ='".$_SESSION['user']."'";
	     if($result=mysqli_query($link, $sql))
     {   
    echo "<script type='text/javascript'>document.location.href='usermainpage.php'</script>";
	  
    } 
  else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
   } 
	
 mysqli_close($link);
?>