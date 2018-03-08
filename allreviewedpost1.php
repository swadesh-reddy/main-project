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

<!--CSS-->

<style> li {list-style:none;}li
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
    <a href="logout.php">Logout</a>
	
  </li>
  </ul>
  </div>
   <div class="col-md-8" id="content" style="float:right;">
   <h2>All Recommended post based on Service Usage History</h2>
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
	include("connection.php");
	$productname = $_GET['productname'];
     $query = "SELECT * FROM review where productname='$productname'";
	 $result= mysqli_query($link, $query);
	 while($row=mysqli_fetch_array($result))
	 {
		  $username=$row['username'];
		 $details= $row['details'];
	$date= $row['date'];
	 }
	?>
           <tr>
		<td>Date</td><td><?php echo $date ?></td>
      </tr>
	  <tr>
        <td >Reviewed by</td>  <td colspan="2"><?php echo $username ?></td>
      </tr> 
	 <tr>
        <td>Reviewed Details</td> <td colspan="2"><?php echo $details ?></td>
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
