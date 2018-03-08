<?php 
session_start();
$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Hit rate</title>
<link rel="stylesheet" href="style.css">
 
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="style2.css">
 <script src="style.js"></script>

<!--CSS-->

<?php 
  	function stars($rank)
        {
	   if($rank == 1)
	   {
		   for ($i=0;$i<3;$i++)
		   {
			   echo "<i class='fa fa-star' style='color:blue'></i>";
		   }
	    } elseif($rank == 2)
	   {
		   for ($i=0;$i<2;$i++)
		   {
			   echo "<i class='fa fa-star' style='color:blue'></i>";
		   }
	    }
		elseif($rank == 3)
	   {
		   for ($i=0;$i<1;$i++)
		   {
			   echo "<i class='fa fa-star' style='color:blue'></i>";
		   }
	    }else
	   {
		   
			 	   
	    }
		
   }
  ?>
<style> li {list-style:none;}li
{
	list-style:none;
}
.fa-star
{
	font-size:20px;
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
       <td rowspan="8"><img src="<?php echo $image1 ?>" ></td></tr>
	<td>Product Name</td> <td><?php echo $productname ?></td>
	   </tr>
	   <tr>
        <td>color</td> <td><?php echo $color ?></td></tr>
		<tr>
        <td>Description</td><td><?php echo $description ?></td>
		</tr><tr>
        <td>uses</td><td><?php echo $uses ?></td></tr>
		<tr>
     	<tr>
        <td>Rank</td>  <td><?php echo $rank ?></td>
		</tr>
        <tr>
        <td>Rating pro</td> <td><?php stars($rank);?></td>
      </tr>          
    </tbody>
  </table>

 <?php 
  }
 mysqli_close($link);
?>
 
 </div></div></body>
</html>
