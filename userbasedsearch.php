
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
  <h2>User based search</h2>
   <table class="table table-bordered">
    
    <tbody>
           <tr>
       <td><input type="search" class="form-control" name="search"></a></td> 
        <td><a href="#"><button class="btn btn-primary">submit</button></a></td>
      </tr>
    </tbody>
  </table>
  
 </div>
 <table class="table table-bordered">
    <tbody>
      <tr>
	    <td rowspan="6"><img src="images/social1.jpg" width="" height="300px">
	
	   <td>Title</td> <td>royice</td>
	   </tr>
	   <tr>
        <td>Uses</td><td>royice</td>
        </tr><tr>
        <td>total voting </td> <td>1</td>
        </tr>
        <tr>
        <td>color</td> <td>black</td>
      </tr>   <tr>
        <td>Rating</td>
      </tr>  <tr>
        <td>Recommend to friend</td> <td><a href="#">recommend</a></td> 
      </tr>    <tr>
        <td colspan="2"><button>click for vote</button></td> 
      </tr>     <tr>
        <td>Review</td> <td><a href="#">review</a></td>
      </tr>     <tr>
        <td>Description</td> <td>This is good</td>
      </tr>        
    </tbody>
  </table>
</div>
</body>
</html>
