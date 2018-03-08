<?php 
session_start();
$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Recommand to friend</title>
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
 <h2>Recommand to user</h2>
  <form class="form-horizontal" action="recommandtofrienddb.php" method="POST">
      <div class="form-group  col-md-8 col-xs-12">
				  <label class="control-label "> Topic Name<i class="star">*</i></label>
              <input type="name" class="form-control" name="productname" required>
	      </div>
       
	   <div class="form-group  col-md-8 col-xs-12">
			  <label class="control-label ">  Select the User to Recommand<i class="star">*</i></label>
       
       <select class="form-control" name="select" required>
		<option>--Select One--</option>
		 <?php
include("connection.php");
  $sql = "SELECT * FROM register WHERE username !='".$_SESSION['user']."'"; 
	$result = mysqli_query($link, $sql);
	while($row=mysqli_fetch_array($result))
  {    
 $username=$row['username'];
 ?>
<option><?php echo $username ?></option><?php
	}
  mysqli_close($link);
 
   ?>
 </select></div>
  <div class="form-group  col-md-8 col-xs-12">
				  <label class="control-label ">Description<i class="star">*</i></label>
        <textarea  class="form-control" name="description" required></textarea>
	     </div>
      
       	<button type="submit" class="btn btn-success col-md-8 " id="submit" name="submit">Submit</button>
						
   </form>
 
 </div></div></body>
</html>
