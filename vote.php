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
		 while($row=mysqli_fetch_array($result))
		 {
     $vote = $row['vote'];
	 $vot = $vote+1;
	 $query = "UPDATE productpost SET vote = '$vot' where productname = '$productname'";
		 }
	 }
   if($result=mysqli_query($link, $query))
   {
  $sql = "SELECT vote FROM productpost where productname = '$productname'";
	 
	if($result=mysqli_query($link, $sql))
  {
     while($row=mysqli_fetch_array($result))
		 {
     $vote = $row['vote'];
	 echo $vote;
	   } 
  }
   }
mysqli_close($link);
		
?>
