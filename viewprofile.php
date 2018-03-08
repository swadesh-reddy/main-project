<?php 
session_start();
$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>view profile</title>
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
   <h2>View Profile</h2>
  <?php
  $link=mysqli_connect("localhost", "root", "", "mainproject");
  	if($link == false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	$friend=$_GET['friend'];
  $query="select * from register where username='$friend' ";
  $result=mysqli_query($link,$query);
  while($row=mysqli_fetch_array($result))
  {
	  $username=$row['username'];
	  $email=$row['email'];
	  $mobile=$row['mobile'];
	  $address=$row['address'];
	  $dob=$row['date'];
	  $pic=$row['profilepic'];
	  $profilepic="uploads/".$pic;
  ?>
<div class="panel panel-default">
   <div class="panel-body pnl-body">
    <div class="col-md-4" style="float:left;border-right:3px solid #f5f5f5;">
  <img src="<?php echo $profilepic ?>" class="img-thumbnail" width="300px;" height="250px;">
  </div>
   <div class="right col-md-3"> Username</div> <div class="left col-md-3"><?php echo $username ?></div>
	 <div class="right col-md-3"> Email</div> <div class="left col-md-3"><?php echo $email ?></div>
	 <div class="right col-md-3"> Mobile</div> <div class="left col-md-3"><?php echo $mobile ?></div>
	 <div class="right col-md-3"> Address</div> <div class="left col-md-3"><?php echo $address ?></div>
	 <div class="right col-md-3"> Date Of Birth</div>  <div class="left col-md-3"> <?php echo $dob ?></div>
   </div>
  </div>
 <?php 
 }
 mysqli_close($link);
?>
 
 </div></div></body>
</html>
