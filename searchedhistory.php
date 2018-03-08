<?php 
session_start();
$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Seaeched history</title>
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
   <h2>Your Searched History<a href="clearhistory.php" style="float:right;"><button class="btn btn-info">Clear History&emsp;<i class="fa fa-trash-o"></i></button></a></h2>
   <table class="table table-bordered">
   <tr>
         <th>useranme</th><th>searched content</th> <th>date</th>
        </tr> 
		<tbody>
	<?php
	include("connection.php");
	$query = ("SELECT * FROM history WHERE username = '".$_SESSION['user']."'");
	$result = mysqli_query($link, $query);
	while($row = mysqli_fetch_array($result))
	{
		$username = $row['username'];
		$productname = $row['fpname'];
		$date = $row['date'];
	
	?>
      <tr>
        <td><?php echo $username ?></td>
       
          
        <td><?php echo $productname ?></td>
       
       
        <td><?php echo $date ?></td>
      </tr>
	  
	  <?php 
	}
	  mysqli_close($link);
	  ?>
    </tbody>
  </table> 
 </div></div></body>
</html>
