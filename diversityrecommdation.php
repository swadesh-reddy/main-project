<?php 
session_start();
$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>K-hit rate</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="style2.css">
 <script src="style.js"></script>

<!--CSS-->

<style> li {list-style:none;}li
{
	list-style:none;
}

.table-bordered
{border:0px;}
.table-bordered tbody tr td
{border:0px;}
</style>
</head>
<body>
<div class="main">
<!--header-->
<div class="container visible-wrap">
   <?php include('header.php');?>
</div></div>

<div class="container" style="padding-bottom:20px;">
<br>
<div  >
  <?include('sidenav.php');?>
  </div>
   <div class="col-md-8" id="content" style="float:right;">
  <h2>K Hit Rate</h2>
   <table class="table table-bordered">
     <?php
  include("connection.php");
  $sql = "SELECT * FROM productpost order by vote desc" ; 
  $result = mysqli_query($link, $sql);
   $rank = 0;
 
  while($row=mysqli_fetch_array($result))
  {    
 $pid =$row['id'];
 $productname=$row['productname'];
 $vote = $row['vote'];
 $rank = $rank + 1;
  ?>
    <tbody>
      <tr>
        <td>Product ID</td>
        <td><?php echo $pid ?></td>
       
      </tr>      <tr>
        <td>Product Name</td>
        <td><?php echo $productname ?></td>
       
      </tr>      <tr>
        <td>View topic</td>
        <td><a href="k-hitrate1.php?vote=<?php echo $vote ?> & rank=<?php echo $rank ?>">view</a></td>
      </tr>
	  <?php 
  }
  mysqli_close($link);
  ?>
    </tbody>
  </table>
	
 </div></div></body></html>
