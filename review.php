<?php 
session_start();
$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Review</title>
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
  <h2>REVIEW</h2>
  <form class="form-horizontal" action="reviewdb.php" method="GET">
      <div class="form-group  col-md-8 col-xs-12">
				  <label class="control-label"> Topic Name<i class="star">*</i></label>
              <input type="search" class="form-control" name="productname" required>
	      </div>
      
  <div class="form-group  col-md-8 col-xs-12">
				  <label class="control-label ">review<i class="star">*</i></label>
        <textarea  class="form-control" name="description" required></textarea>
	     </div>
      
       	<button type="submit" class="col-md-offset-1 btn btn-primary col-md-6  " id="submit" name="submit">Post</button>
						
   </form> 
 </div></div></body>
</html>
