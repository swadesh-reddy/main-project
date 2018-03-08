
<!DOCTYPE html>
<html lang="en">

<head>
<title>User Login</title>
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
.table-bordered
{border:0px;}
.table-bordered tbody tr td
{border:0px;}	
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
  <h2>Search Friend </h2>
   <div class="col-md-6" style="float:left;border-right:3px solid;">
  <img src="images/social-media4.jpg" class="img-circle" width="300px;" height="250px;">
  </div>
  <div class="col-md-6" style="float:right;">
<table class="table table-bordered">
    <tbody>
      <tr>
	   <td>Name</td> <td>john</td>
	   </tr>
	   <tr>
         <tr>
        <td>status</td><td><a href="#">request</a></td>
      </tr>        
    </tbody>
  </table>
  </div>
     
 </div>
</div>
<a href="usermainpage.php" style="float:right">Back</a></body>
</html>
