<?php 
session_start();
$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>All Post with rank</title>
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
   <h2>All post with ranks</h2>
  <?php
include("connection.php");
  $sql = "SELECT * FROM productpost"; 
	$result = mysqli_query($link, $sql);
	while($row=mysqli_fetch_array($result))
  {    
	 $productname=$row['productname'];
 $productcolor=$row['productcolor'];
 $productdescription=$row['description']; 
 $productuses=$row['uses'];
 $madeby=$row['madeby'];
 $rate=$row['rate'];
 $vote=$row['vote'];
 $image=$row['photo'];
 $image1="uploads/".$image;
  ?>
   <table class="table table-bordered">
    <tbody>
	
      <tr>
        <td rowspan="7"><img src="<?php echo $image1 ?>"></td><td>Product Name</td> <td><?php echo $productname ?></td>
	   </tr>
	   <tr>
        <td>color</td> <td><?php echo $productcolor ?></td></tr>
		<tr>
        <td>Description</td><td><?php echo $productdescription ?></td>
		</tr><tr>
        <td>uses</td><td><?php echo $productuses ?></td></tr>
		<tr>
        <td>date</td> <td><?php echo date("y-m-d"), date("h:i:sa"); ?></td></tr>
		<tr>
        <td>Total vote</td>  <td><?php echo $vote ?></td>
		</tr>
        <tr>
        <td>Rating pro</td> <td><?php echo $rate ?></td>
      </tr>          
    </tbody>
  </table>
  <?php
  }
  mysqli_close($link);
  ?>


 </div></div></body>
</html>
