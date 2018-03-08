<?php 
session_start();
$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>All Reviewed</title>
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
    <?php include('header.php'); ?>	
</div></div>

<div class="container" style="padding-bottom:20px;">
<br>
<div  >
 <?php include('sidenav2.php'); ?>
  
  </div>
   <div class="col-md-8" id="content" style="float:right;">
   <h2>All Reviewed post based on Service Usage History</h2>
  <table class="table table-bordered">
    <tbody>
	<?php
	include("connection.php");
	$productname = $_GET['productname'];
     $query = "SELECT * FROM productpost where productname='$productname'";
	 $result= mysqli_query($link, $query);
	 while($row=mysqli_fetch_array($result))
	 {
		 $productname=$row['productname'];
		 $id=$row['id'];
		 $photo = $row['photo'];
		 $pic = 'uploads/'.$photo;
		 $vote= $row['vote'];
	 }
	?>
      <tr>
        <td rowspan="4"><img src="<?php echo $pic ?>">
		</td><td>Product ID</td> <td><?php echo $id ?></td>
	   </tr>
	   <tr>
        <td>Product Name</td> <td><?php echo $productname ?></td>
        </tr><tr>
        <td>Total Votes</td> <td><?php echo $vote ?></td>
        </tr>
		<?php
	$productname = $_GET['productname'];
     $query1 = "SELECT * FROM review where productname='$productname'";
	 $result1 = mysqli_query($link, $query1);
	 while($row=mysqli_fetch_array($result1))
	 {
		  $date = $row['date'];
		  $username = $row['username'];
		 $details = $row['details'];
	     
	 }
	?>
           <tr>
		<td>Date</td><td><?php echo $row['date']; ?></td>
      </tr>
	  <tr>
        <td >Reviewed by</td>  <td colspan="2"><?php echo $username ?></td>
      </tr> 
	 <tr>
        <td>Reviewed Details</td> <td colspan="2"><?php echo $row['details']; ?></td>
      </tr> 
<?php
	
mysqli_close($link);
?>	  
    </tbody>
  </table>
  
 </div>
</div>
</body>
</html>
