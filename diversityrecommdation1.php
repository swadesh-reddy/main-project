<?php 
session_start();
$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>K-hitrate</title>
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
<div>
 <?php include('sidenav.php');?>
  </div>
   <div class="col-md-6" id="content" style="float:right;">
  <h2>K-hit product</h2>
 <?php 
    $link=mysqli_connect("localhost", "root", "", "mainproject");
  	if($link == false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	$vote = $_GET['vote'];
 	$rank = $_GET['rank'];
  $query="select * from productpost where vote = $vote ";
  $result=mysqli_query($link,$query);
  while($row=mysqli_fetch_array($result))
  {
	 $productname = $row['productname'];
      $color = $row['productcolor'];
      $description = $row['description'];
     $uses = $row['uses'];
     $pic = $row['photo'];
	 $image1 = "uploads/".$pic;
 	 $rate = $row['rate'];
  ?>
   <table class="table table-bordered">
    <tbody>
	
      <tr>
       <td>Product Name</td> <td><?php echo $productname ?></td>
	   </tr>
	   <tr>
        <td>color</td> <td><?php echo $color ?></td></tr>
		<tr>
        <td>Description</td><td><?php echo $description ?></td>
		</tr><tr>
        <td>uses</td><td><?php echo $uses ?></td></tr>
		<tr>
        <td>Product image</td> <td rowspan=""><img src="<?php echo $image1 ?>"></td></tr>
		<tr>
        <td>Rank</td>  <td><?php echo $rank ?></td>
		</tr>
        <tr>
        <td>Rating pro</td> <td><?php if($rank == 1) { echo yes } ?></td>
      </tr>          
    </tbody>
  </table>
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
