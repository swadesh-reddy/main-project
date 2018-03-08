<?php 
session_start();
$_SEESION['user'];
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

<!--CSS-->

<style> li {list-style:none;}.fa
{
	font-size:23px;
	cursor: pointer;
}
.fa-thumbs-up:hover
{
	color:blue;
	transform: scale(2,2);
	transition: all 0.4s;
	

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
<body>
<div class="main">
<!--header-->
<div class="container visible-wrap">
    <div class="row">
        <article class="col-lg-12 col-md-12 col-sm-12 myheader">
            <header>
                <h2 align="center"><font color="white">Collaborative Filtering-Based Recommendation of Online Social Voting</font></h2>
                <section class="menuBox">
                    <nav class="navbar navbar-default navbar-static-top mynavbar clearfix" role="navigation">
                    	<ul class="nav sf-menu clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li class="active sub-menu"><a href="userlogin.php">User Login</a></li>
                                    <li><a href="adminlogin.php">Admin Login</a></li>
                                    <li><a href="register.php">Register</a></li>
                                    
                                </ul>
                    </nav>
                </section>
            </header>
        </article>
    </div>
</div></div>

<div class="container" style="padding-bottom:20px;">
<br>
<div  >
  <ul class="sidenav" style="float:left;">
  <li>
   <h2>Sider Menu</h2>	
 </li>
  <li>
    <a   href="logout.php">Logout</a>
	
  </li>
  </ul>
  </div>
   <div class="col-md-8" id="content" style="float:right;">
 
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
        <td>Total votes </td>  <td><?php echo $vote ?></td>
		</tr>
       <tr>
        <td>Uses</td><td><?php echo $productuses ?></td></tr>
		<tr>
        <td>Recommand to Friend</td><td><a href="recommandtofriend.php">Recommand</a></td></tr>
		<tr>
        <td>vote here</td>  <td><i id="vote" class="fa fa-thumbs-up" onclick="increment();"></i></td>
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
  <script>
    function increment()
  {  
       document.getElementById("vote").style.color = "blue";
	  window.location.href="vote.php?productname=<?php echo $productname ?>";
	
  }
    </script>
	<?php
	
    mysqli_close($link);
 
   ?>
 
 </div></div></body></html>
