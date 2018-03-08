<?php 
session_start();
$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>ALL USERS SEARCH HISTORY</title>
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
 <?php 	include('sidenav2.php');?>
  </div>
   <div class="col-md-8" id="content" style="float:right;">
  <h2>All User Search History</h2>
   <table class="table table-bordered">
    <thead>
      <tr>
        <th>S no</th>
        <th>Username</th>
        <th>Keyword</th>
       <th>date&time</th>
      </tr>
    </thead>
    <tbody>
	<?php
	include("connection.php");
	$query = ("SELECT * FROM history");
	$result = mysqli_query($link, $query);
	while($row = mysqli_fetch_array($result))
	{    
		$id = $row['id'];
		$username = $row['username'];
		$productname = $row['fpname'];
		$date = $row['date'];
	
	?>
       <tr>
        <td><?php echo $id ?></td>
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
  
 </div>
</div>
</body>
</html>
