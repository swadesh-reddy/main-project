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
 
   <table class="table table-bordered">
    <tbody>
	 <?php
include("connection.php");
  $productname=$_GET['productname'];
  $sql = "SELECT * FROM rproduct where productname = '$productname'"; 
	$result = mysqli_query($link, $sql);
	while($row=mysqli_fetch_array($result))
  {    
	 $productname=$row['productname'];
 $productdescription=$row['description']; 
 $username=$row['username'];
 $recommandto=$row['recommandto'];
 $id=$row['id'];
 $date=$row['date'];
  }
      $query = "SELECT * FROM productpost where productname='$productname'";
	 $result= mysqli_query($link, $query);
	 while($row=mysqli_fetch_array($result))
	 {
		 $photo = $row['photo'];
		 $pic = 'uploads/'.$photo;
		 $rate=$row['rate'];	
 
	 }
	
  ?>
      <tr>
        <td rowspan="8"><img src="<?php echo $pic ?>"></td><td>Product Name</td> <td><?php echo $productname ?></td>
	   </tr>
	   <tr>
        <td>Product Id</td> <td><?php echo $id ?></td></tr>
		<tr>
        <td>Recommand From</td><td><?php echo $username ?></td>
		</tr><tr>
        <td>Recommand to</td><td><?php echo $recommandto ?></td>
		</tr><tr>
        <td>Description</td><td><?php echo $productdescription ?></td>
		</tr>
        <td>date</td> <td><?php echo $date?></td></tr>
		<tr>
        <td>rate</td>  <td><?php echo $rate ?></td>
		</tr>
        <tr>
        <td>Rating pro</td> <td><?php echo $rate ?></td>
      </tr>          
    </tbody>
  </table>
  <?php
   
  mysqli_close($link);
  ?>
 </div></div></body>
</html>
