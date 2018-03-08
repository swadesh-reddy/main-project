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
   <h2>ALL USERS</h2>
   <table class="table table-bordered">
   
    <thead>
      <tr>
        <th>Sno</th>
        <th>Username</th>
        <th>mobile</th>
        <th>gender</th>
        <th>Address</th>
        <th>status</th>
      </tr>
    </thead>
    <tbody>
	<?php 
   $link = mysqli_connect("localhost", "root", "", "mainproject");
   if($link == false)
   {
	   die("ERROR: Could not connect. " . mysqli_connect_error());
   }
    
    $sql = "SELECT * FROM register where status='authorise'"; 
	$result = mysqli_query($link, $sql);
	while($row=mysqli_fetch_array($result))
  {    
       $id=$row['id'];
	  $username=$row['username'];
	  $gender=$row['gender'];
	  $mobile=$row['mobile'];
	  $address=$row['address'];
	  $password=$row['password'];
	  $status=$row['status'];
	  ?>
      <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $username ?></td>
        <td><?php echo $mobile ?></td>
        <td><?php echo $gender ?></td>
        <td><?php echo $address ?></td>
        <td><a href="authorise.php?username=<?php echo $username ?>&password=<?php echo $password ?>" onclick="display();" ><?php echo $status ?></a></td>
      </tr>    
    </tbody>
	<?php
  }
	mysqli_close($link);
	?>
  </table>
  
 <script>
function display()
{document.getElementById('authorise').innerHtml='authorised';}
</script>

 </div></div></body>
</html>
