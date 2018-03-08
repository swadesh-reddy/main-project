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
<body>
<div class="main">
<!--header-->
<div class="container">
    <?php include('header.php'); ?>
</div>

<div class="container" style="padding-bottom:20px;">
<br>
<div  >
  <?php include('sidenav.php'); ?>
  </div>
   <div class="col-md-8" id="content" style="float:right;">
  <h2>Interested posts </h2>
  <?php 
   include("connection.php");
  $query = "select * from rproduct where username = '".$_SESSION['user']."';";
  $result=mysqli_query($link,$query);
  while($row=mysqli_fetch_array($result))
  { 
	 $id = $row['id'];
     $productname = $row['productname'];
  ?>
   <div class="panel panel-default">
   <div class="panel-body pnl-body">
   <div class="right col-md-6"> Product ID</div> <div class="left col-md-6"><?php echo $id ?></div>
	 <div class="right col-md-6"> Product Name</div>  <div class="left col-md-6"> <?php echo $productname ?></div>
<div class="right col-md-6">	view details</div>
    <div class="left col-md-6">   <a href="interestpost1.php?friend=<?php echo $productname ?>">more</a></div>
    </div>
  </div>
 <?php 
 }
 mysqli_close($link);
?>
 
 </div></div></div></body>
</html>
