<?php 
session_start();

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

<style>
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
<br><br>
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
   <div class="col-md-8" style="float:right;">
  <h2>Welcome to Admin</h2>
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
  
 </div>
</div>
<script>
function display()
{document.getElementById('authorise').innerHtml='authorised';}
</script>
</body>
</html>
