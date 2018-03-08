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
li {list-style:none;}
.table-bordered
{border:0px;}
.table-bordered tbody tr td
{border:0px;}
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
 <h2>Top 'K' Hit Rate</h2>
   <table class="table table-bordered">
   <form action="k-hitrate.php" method="GET" >
    <tbody>
           <tr>
       <td><label>Enter Top K-Value:</label><input type="search" class="form-control" name="searchpost" id="searchpost" required></td><td></td><td></td></tr><tr> 
        <td><button class="btn btn-primary" type="submit" name="submit">Search</button></td>
      </tr>
    </tbody>
	</form>
  </table>
 
 </div></div></body>
</html>
