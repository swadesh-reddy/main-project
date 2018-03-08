<?php 
session_start();
$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Add Post</title>
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
    <h2>ADD POST</h2>
   <form class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12" action="addpostdb.php" method="POST" enctype="multipart/form-data">
  
	 
          	<div class="form-group col-md-12 col-sm-12 col-xs-12">
			   <label class="control-label ">product name<i class="star">*</i></label>
				<input type="text" min=5 maxlength=50 class="form-control" name="productname" id="product name" required> 
				</div>
				 <div class="form-group  col-md-12 col-xs-12">
				  <label class="control-label ">product color<i class="star">*</i></label>
             <input id="password" type="text" class="form-control" name="productcolor" placeholder="">
	            </div>
                     	 <div class="form-group col-md-12 col-sm-12 col-xs-12">
								<label class="control-label">product Description<i class="star">*</i></label>
								<textarea rows="2"  name="productdescription"  class="form-control" required=""></textarea></div>
							
							<div class="form-group col-md-12 col-sm-12 col-xs-12">
								<label class="control-label">product uses<i class="star">*</i></label>
									<input  type="text" class="form-control" name="productuses" placeholder="" style="z-index:0" required>
								</div><div class="form-group col-md-12 col-sm-12 col-xs-12">
								<label class="control-label">made by<i class="star">*</i></label>
									<input  type="text" class="form-control" name="madeby" placeholder="" style="z-index:0" required>
								</div>
								 <div class="form-group col-md-12 col-sm-12 col-xs-12">	
									<label class="control-label  col-md-12 col-sm-12 col-xs-12">Image<i class="star">*</i></label>
									<input type="file" name="image" class="form-control" required>
									
								</div>
								
						<center><br>
									<button type="submit" class="btn btn-success col-md-4 col-md-offset-4 " id="submit">Submit</button>
									
							</center>
							</form>
	

  
 

 </div></div></body>
</html>
