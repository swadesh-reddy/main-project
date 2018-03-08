<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Interest post</title>
<link rel="stylesheet" href="style.css">
 
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="style2.css">
 <script src="style.js"></script>

<!--CSS-->

<style>
#eye
{
	top: -22px;
    left: -7px;
    position: relative;
	float:right;
	cursor:pointer;
}
.container
{
	border:1px solid #f5f5f5;
}
form
{
	margin-top:20px;
	border: 3px solid #f5f5f5;
    padding: 40px 0px 33px 0px;
    margin-bottom: 28px;
    box-shadow:1px 1px 13px 2px #eee;
}
button
{margin-left:20px;}
</style>
</head>
<body style="background-color:cadetblue;margin-top:2px;">
<div class="container">
<!--header-->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
	<div class="carousel-caption">
 <h2 align="center"><font color="white">Collaborative Filtering-Based Recommendation of Online Social Voting</font></h2>
						</div>

      <div class="item active">
        <img src="images/social2.jpg" alt="Los Angeles" style="width:1340px;height:300px;">
		
      </div>

    
      <div class="item">
        <img src="images/social1.jpg" alt="New york" style="width:1340px;height:300px;">
		
      </div>
    </div>

  </div>
              
                <section class="menuBox" style="margin-top:-100px;">
                    <nav class="navbar header" role="navigation">
                    	<ul class="nav navbar-nav">
                            <li><a href="index.html">Home</a></li>
                            <li class="active sub-menu"><a href="userlogin.php">User Login</a></li>
                                 <li><a href="adminlogin.php">Admin Login</a></li>
                                 <li><a href="register.php">Register</a></li> 
                           </ul>
						  
						 
                    </nav>
                </section>
            </header>
 	<div class="container">

   <form class="col-md-offset-3 col-md-5 col-sm-12 col-xs-12"  action="logins.php" method="POST" >
 <h2 class="col-md-offset-4"style="letter-spacing: 2px; font-family: sans-serif; text-align: justify;">USER LOGIN</h2><br>
  <div class="form-group col-md-offset-2 col-md-8 col-xs-12">
    <label class="control-label">Username<i class="star">*</i></label>		
      <input  type="name"  class="form-control" id="username" name="username" required>
 	</div>
 <div class="form-group col-md-offset-2 col-md-8 col-xs-12">
      <label  class="control-label" id ="password-l">Password<i class="star">*</i></label>		
    <input id="password" type="password" class="form-control fa fa-eye" name="password" required><i id="eye" class="fa fa-eye" style="" onclick="display();"></i>
    </div>
 <div class="form-group col-md-offset-1  col-md-7 col-xs-12">
 <button type="submit" class="btn btn-success  col-md-offset-4  col-md-6" name="submit" id="submit">Submit</button></div>
 <div class="form-group">
 		<br><a class=" col-md-4" href="register.php">dont have account?</a>
		<br>	
							<br> 			<!--Register-->
			</div>
  </form>
  
  </div>  </div>
  <script>
function display()
{
	var a = document.getElementById("password");
	 if(a.type == "password")
	 {
		 a.type = "name";
	 }
	 else
	 {
		 a.type = "password";
	 }
	 document.getElementById("eye").style.color = "blue";
}
</script>     </body>
</html>
