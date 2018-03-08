<?php 
session_start();
$_SESSION['user'];?><!DOCTYPE html>
<html lang="en">

<head>
<title>Friend Search And Request</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="style2.css">
 <script src="style.js"></script>

<!-
<!--CSS-->

<style> 
.btn
{
	font-size:19px;
}
li {list-style:none;}li
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
   <?php include('header.php'); ?>
</div></div>

<div class="container" style="padding-bottom:20px;">

<div>
   <?php include('sidenav.php'); ?>

  </div>
   <div class="col-md-8" id="content" style="float:right;">
   <br>
 <h2>Friend Search</h2>
   <table class="table table-bordered">
   <form action="sendfriend.php" method="POST" >
    <tbody>
           <tr>
       <td><input type="search" class="form-control" name="search" required></a></td> 
        <td><button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-search"></i></button></td>
      </tr>
    </tbody>
	</form>
  </table>
  
 </div>
</div>
<a href="usermainpage.php" style="float:right">Back</a></body>
</html>
