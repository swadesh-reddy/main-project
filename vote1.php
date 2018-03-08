<?php
	session_start();
 $_SESSION['user'];
 $link = mysqli_connect("localhost", "root", "", "mainproject");
 if($link == false)
 {
	 die("ERROR: mysqli_error()" .mysqli_connect_error());
 }
  $productname = $_GET['productname'];
     $sql = "SELECT vote FROM productpost where productname = '$productname'";
	 
	if($result=mysqli_query($link, $sql))
  {
    echo $vote ;
	   } 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
		
?>