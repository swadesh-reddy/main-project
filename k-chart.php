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
<style> li {list-style:none;}td
{
	padding:10px;
}
.bar
{
padding:100px;	
}
.myBar {
  height: 40px;
  background-color: #4CAF50;
}
#progress
{
	width:300px;
}
li
{
	list-style:none;
}
.sidenav li 
{
padding-top:5px;	
padding-bottom: 5px;
padding-left:15px;
    font-size: 14px;
}
.sidenav li:hover 
{background-color:#007bff;

}
.sidenav li:hover a
{
color:#fff;
}
.adminpic
{
	width: 650px;
    height: 271px;
}
</style>
</head>
<body onload="graph();">
<div class="main">
<!--header-->
<div class="container visible-wrap">
    <?php include('header.php'); ?>
</div></div>

<div class="container" style="padding-bottom:20px;">
<br>
<div  >
<?php include('sidenav2.php');?>
  </div>
   <div class="col-md-8" id="content" style="float:right;">
  <h2>K-top chart</h2>
  <table>
  <tbody  class="bar">
	<?php 
   $link = mysqli_connect("localhost", "root", "", "mainproject");
   if($link == false)
   {
	   die("ERROR: Could not connect. " . mysqli_connect_error());
   }
    
    $sql = "SELECT * FROM productpost"; 
	$result = mysqli_query($link, $sql);
	while($row=mysqli_fetch_array($result))
  {    
      $productname=$row['productname'];
	  $vote=$row['vote'];
	  ?>
      <tr>
        <td><?php echo $productname ?></td>
       
 <td> <div id="progress"><div class="myBar" style="width:<?php echo $vote ?>%;padding:10px 10px;color:#fff;"><?php echo $vote ?>%</div></div></td>
 </tr>
   <?php
  }
	mysqli_close($link);
	?>
	</tbody>
	</table>
 </div>
</div>
<br>

<script type="text/javascript">
 var color = <?php echo $vote ?>;
 	  
		  var a = document.getElementsByClassName('myBar');
        var i=0;		 
		 for(i=0;i<a.length;i++)
		 {
			 if(color > 60)
	     {
			 a[i].style.backgroundColor = "blue";
		 }
		 else
			 a[i].style.backgroundColor = "#4CAF50";
		 }
	  
  
</script>

</body>
</html>
