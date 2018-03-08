<?php 
session_start();
$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>User Login</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="style.css">
<script src="style.js"></script>

<!--CSS-->

<style> li {list-style:none;}
</style>
</head>
<body>

<div class="container" style="">
<br>
  <ul class="sidenav" id="sidenav" style="float:left;background-color:#eeeeee;">
  <i class="fa fa-close" id="fa-close" onclick="hidenav();"></i><i class="fa fa-arrow-right" id="fa-arrow-right" onclick="shownav();" style="display:none;"></i> 
  </li> 
  <li style="margin-top:20px;">
    <a   href="userprofile.php">View your profile</a>
  </li>
  <li>
    <a   href="searchfrndandrequest.php">search friends & friend request</a>
  </li> 
  <li>
    <a   href="viewallfriends.php">view all my friends </a>
  </li>
  <li>
    <a   href="searchpost.php">search for post</a>
  </li>
  <li>
    <a   href="searchedhistory.php">my search History</a>
  </li> 
  <li>
    <a   href="allreviewedpost.php">view recommendations</a>
  </li> 
  <li>
    <a   href="interestpost.php">view user interest on post</a>
  </li> 
 
  <li>
    <a   href="k-hitratevalue.php">view top hit K rate</a>
  </li>
  <li>
    <a   href="logout.php">Logout</a>
	
  </li>
  </ul>
  
   <div class="col-md-8" id="main" style="float:right;">
    <?php
	include("connection.php");
	$query="select * from register where username='".$_SESSION['user']."' ";
	$result=mysqli_query($link,$query);
	while($row=mysqli_fetch_array($result))
	{ 
		$username=$row['username'];
		  	?>
	
  <h2>Welcome <?php echo $username ?></h2>
  <img src="images/social-media4.jpg" class="adminpic">
  </div>
  <?php
	}
	mysqli_close($link);
	?>
 
</div>
<script>

</script>
</body>
</html>
