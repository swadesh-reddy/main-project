<?php 
session_start();
$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Interest post</title>
<link rel="stylesheet" href="style.css">
 
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="style2.css">
 <script src="style.js"></script>

<!--CSS-->

<style> 

</style>
</head>
<body style="background-color:cadetblue;margin-top:2px;">
<div class="container">
<!--header-->
    <?php include('header.php'); ?>
	

<div >
  <?php include('sidenav.php'); ?>
  </div>
   <div class="col-md-8" id="content" style="float:right;">
   <br>
  <h2>All friends</h2>
  <?php
		$link = mysqli_connect("localhost", "root", "", "mainproject");
    // Check connection
	if($link == false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 $search=$_POST['search'];
	 $_SESSION['friend']=$search;
     
	$query="select * from register where username='".$_SESSION['friend']."'";
	if($query == '')
	
	{
		echo "<script type='text/javascript'>
		window.alert('Login Successfull');
		</script>";

	 } 
	else
	{
$result=mysqli_query($link,$query);
	
	while($row=mysqli_fetch_array($result))
	{ 
		$username=$row['username'];
		$pic=$row['profilepic'];
	  $profilepic="uploads/".$pic;

		  	?>
   
   <div class="panel panel-default">
   <div class="panel-body pnl-body">
  <div class="col-md-2"> <img src="<?php echo $profilepic ?>" width="100px" height="50px" style="float:left;"></div>
   <div class="right col-md-6"> Username</div> <div class="left col-md-4"><?php echo $username ?></div>
	<div class="right col-md-4">	status</div>
    <div class="left col-md-6"> <button id="btn-info"  style="color:#fff;" class="btn btn-info"><a href="requestdb.php" onclick="disable();">Request</a></button></div>
    </div>
  </div>
  <?php  } 
	}
	$productname=$_SESSION['friend'];
	include("historydb.php");
	mysqli_close($link);
	?>
 <script>
function disable()
{
	document.getElementById("btn-info").disabled=true;
   document.getElementById("btn-info").innerHTML="Request Sent";

}
</script>
 </div></div></body>
</html>
