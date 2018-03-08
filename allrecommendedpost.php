<?php 
session_start();
$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>All Recommanded </title>
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
  <?php include('sidenav2.php'); ?>
  </div>
   <div class="col-md-8" id="content" style="float:right;">
   <br>
   <h2>ALL RECOMMANDED POST</h2>
  <?php
include("connection.php");
  $sql = "SELECT * FROM rproduct"; 
	$result = mysqli_query($link, $sql);
	while($row=mysqli_fetch_array($result))
  {    
	 $productname=$row['productname'];
 
 $id=$row['id'];
?>
   <table class="table table-bordered">
    <tbody>
	
      
	   <tr>
        <td>Product Id</td> <td><?php echo $id ?></td></tr>
		<tr>
        <td>Product Name</td> <td><?php echo $productname ?></td>
	   </tr>
		<tr>
        <td>view product</td><td><a href="allrecommendedpost2.php?productname=<?php echo $productname ?>">here</td>
      </tr>          
    </tbody>
  </table>
  <?php
  }
  mysqli_close($link);
  ?>
 

 </div></div></body>
</html>
