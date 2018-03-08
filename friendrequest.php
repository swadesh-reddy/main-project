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

.adminpic
{
	width: 650px;
    height: 271px;
}
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
  <h2>friend request</h2>
  <?php 
	$link = mysqli_connect("localhost", "root", "", "mainproject");
    // Check connection
	if($link == false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	
$sql = "select * from  request where friendname ='".$_SESSION['user']."' AND status='waiting'";
$result=mysqli_query($link, $sql)   ;
while($row=mysqli_fetch_array($result))    
{
	$_SESSION['friend']=$row['username'];
	
 include('friendrequest1.php');
 ?>
   <div class="col-md-6" style="float:left;border-right:3px solid;">
  <img src=" <?php echo $profilepic ?>" class="img-circle" width="300px;" height="250px;">
  </div>
  <div class="col-md-6" style="float:right;">
<table class="table table-bordered" >
    <tbody>
    <tr>
	  <td> <label>Name:&emsp;</label> <label><?php echo $_SESSION['friend'] ?></label></td>
	   </tr>
	   <tr>
         <tr>
        <td><button id="accept-btn" class="btn btn-primary" onclick="accept();"style="color:#fff;"> <span id="accept">Accept</span></button>&emsp;<a href="decline.php?friend=<?php echo $_SESSION['friend'] ?>"><button class="btn btn-danger" style="color:#fff;">decline</button></a></td>
      </tr>        
    </tbody>
  </table>
 
  </div><?php 
 }
 mysqli_close($link);
?>
  <script>
 function accept()
 {
 var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function()
  {
	if( xhttp.readyState == 4 &&  xhttp.status == 200)
    {
		document.getElementById("accept").innerHTML = "Accepted";
		document.getElementById("accept-btn").disabled = true;
		
	}		
  };
  xhttp.open("GET", "respond.php", true);
  xhttp.send();
 }
 </script>
 </div></div></body>
</html>
