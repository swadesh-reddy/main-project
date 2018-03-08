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

<style> li {list-style:none;}li
{
	list-style:none;
}
.table-bordered
{border:0px;}
.table-bordered tbody tr td
{border:0px;}
a .btn
{
	font-size:19px;
}
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
  <h2>User Search History</h2>
   <table class="table table-bordered">
    <tbody>
           <tr>
       <td><a><button class="btn btn-primary" onclick="display();">Search Friends&emsp;<i class="fa fa-search"></i></button></a></td> 
        <td><a href="friendrequest.php"><button class="btn btn-primary">Friend Requests&emsp;<i class="fa fa-user"></i></button></a></td>
      </tr>
    </tbody>
  </table>
  <table class="table table-bordered" style="width:50%;display:none;" id="searchfnd">
   <form action="sendfriend.php" method="POST" >
    <tbody>
           <tr>
       <td><input type="search" class="form-control" name="search" placeholder="friend name..." required></a></td> 
        <td><button class="btn btn-success" type="submit" name="submit" ><i class="fa fa-search"></i></button></td>
      </tr>
    </tbody>
	</form>
  </table>
 <?php 
 mysqli_close($link);
?>
 <script>
 function display()
 {
	 var a = document.getElementById("searchfnd");
	 if(a.style.display == "none")
	 {
	a.style.display = "block";
	a.style.transition = "10s";
	 }
	 else
	 {
	  a.style.display = "none";
	   a.style.transition = "6s";
	 }
	
 }
</script>
 </div></div></body>
</html>
