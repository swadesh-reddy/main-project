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
    $link=mysqli_connect("localhost", "root", "", "mainproject");
  	if($link == false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
  $query="select * from friends where username='".$_SESSION['user']."' ";
  $result=mysqli_query($link,$query);
  while($row=mysqli_fetch_array($result))
  {
	  
	 $friend = $row['friend'];
  ?>
   <div class="panel panel-default">
   <div class="panel-body pnl-body">
   <div class="right col-md-6"> Username</div> <div class="left col-md-6"><?php echo $friend ?></div>
	<div class="right col-md-6">	view details</div>
    <div class="left col-md-6">   <a href="viewprofile.php?friend=<?php echo $friend ?>">view</a></div>
    </div>
  </div>
 <?php 
 }
 mysqli_close($link);
?>
 
 </div></div></body>
</html>
