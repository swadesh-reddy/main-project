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
 <h2>K Hit Rate</h2>
   <table class="table table-bordered">
     <?php
  include("connection.php");
  $number =$_GET['searchpost'];
  $sql = "SELECT * FROM productpost order by vote desc LIMIT $number" ; 
  $result = mysqli_query($link, $sql);
   $rank = 0;
 
  while($row=mysqli_fetch_array($result))
  {    
 $id =$row['id'];
 $productname=$row['productname'];
 $vote = $row['vote'];
 $rank = $rank + 1;
  ?>
   <div class="panel panel-default">
   <div class="panel-body pnl-body">
   <div class="right col-md-6"> Product ID</div> <div class="left col-md-6"><?php echo $id ?></div>
	 <div class="right col-md-6"> Product Name</div>  <div class="left col-md-6"> <?php echo $productname ?></div>
<div class="right col-md-6">	view topic</div>
    <div class="left col-md-6"><a href="k-hitrate1.php?vote=<?php echo $vote ?> & rank=<?php echo $rank ?>">view</a></div>
    </div>
  </div>
 <?php 
 }
 mysqli_close($link);
?>
 
 </div></div></body>
</html>
