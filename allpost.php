<?php 
session_start();
$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>All Post</title>
<link rel="stylesheet" href="style.css">
 
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="style2.css">
 <script src="style.js"></script>

<!--CSS-->

<style> li {list-style:none;}.fa
{
	font-size:23px;
	cursor: pointer;
}
.fa-thumbs-up
{
	color:blue;
	

}


.adminpic
{
	width: 650px;
    height: 271px;
}
</style></head>
<body style="background-color:cadetblue;margin-top:2px;">
<div class="container">
<!--header-->
    <?php include('header.php'); ?>
	

<div >
  <?php include('sidenav.php'); ?>
  </div>
   <div class="col-md-8" id="content" style="float:right;">
   <br>
 
  <?php
include("connection.php");
	
   $_SESSION['search']=$_GET['searchpost'];
   	
	 $sql = "SELECT * FROM productpost WHERE productname = '".$_SESSION['search']."'"; 
    $result = mysqli_query($link, $sql);
 if(mysqli_num_rows($result) == 0) {

	   echo "
		 <script>
		 window.alert('no element found on ".$_SESSION['search']."');
         window.location.href='searchpost.php';
		  </script>";
  }
	else
	{		
  while($row=mysqli_fetch_array($result))
  {    
 $productname=$row['productname'];
 $productcolor=$row['productcolor'];
 $productdescription=$row['description']; 
 $productuses=$row['uses'];
 $madeby=$row['madeby'];
 $rate=$row['rate'];
 $vote=$row['vote'];
 $image=$row['photo'];
 $image1="uploads/".$image;

  }
require("historydb.php");
 	}
  ?>
   <h2>All post with Keyword "<?php echo $productname ?>"</h2>
   <table class="table table-bordered">
    <tbody>
	
      <tr>
        <td rowspan="8"><img src="<?php echo $image1 ?>"></td><td>Product Name</td> <td><?php echo $productname ?></td>
	   </tr>
	   <tr>
        <td>color</td> <td><?php echo $productcolor ?></td></tr>
		
		<tr>
        <td>Total votes </td>  <td id="vote"><?php echo $vote ?></td>
		</tr>
       <tr>
        <td>Uses</td><td><?php echo $productuses ?></td></tr>
		<tr>
        <td>Recommand to Friend</td><td><a href="recommandtofriend.php">Recommand</a></td></tr>
		<tr>
        <td>vote here</td>  <td><i id="votes" class="fa fa-thumbs-up" onclick="increment();"></i></td>
		</tr>
        <tr>
        <td>Rating</td> <td><?php echo $rate ?></td>
      </tr>   
	  <tr>
        <td>rieview</td> <td><a href="review.php">review</a></td>
      </tr>       
      <tr>
        <td colspan="3"><h6>Description:</h6>&nbsp;<?php echo $productdescription ?></td>
		</tr>	  
    </tbody>
  </table>
   <?php 
  
 mysqli_close($link);
?>
  <script>
    function increment()
  {  
      var xhttp = new XMLHttpRequest();
	 xhttp.onreadystatechange  = function()
	 {
		 if (xhttp.readyState == 4 && xhttp.status == 200)
		 {
			 document.getElementById("vote").innerHTML = xhttp.responseText;
		 }
	 };
	  xhttp.open("GET", "vote.php?productname=<?php echo $productname ?>", true);
    xhttp.send();
	
	 document.getElementById("votes").style.color = "Green";
	
}
</script>
 </div></div></body>
</html>
