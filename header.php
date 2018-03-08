                  
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

 
              
                <section class="menuBox" style="margin-top:-90px;">
                    <nav class="navbar header" role="navigation">
                    	<ul class="nav navbar-nav">
                            <li><a href="index.html">Home</a></li>
                            <li class="active sub-menu"><a href="userlogin.php">User Login</a></li>
                                 <li><a href="adminlogin.php">Admin Login</a></li>
                                 <li><a href="register.php">Register</a></li> 
                           </ul>
						  
						    <?php
								include("connection.php");
								$query1="select * from register where username='".$_SESSION['user']."'";
								$result1=mysqli_query($link,$query1);
								while($row=mysqli_fetch_assoc($result1))
								{ 
									$pic = $row['profilepic'];
									$photo = "uploads/".$pic;
									$username = $row['username'];
								}
										?>
			<span style="float:right;margin:17px 23px -8px 0px;"><b style="margin-top:15px;letter-spacing:1px;text-transform:Uppercase;"><?php echo $username ?></b> <img src="<?php echo $photo ?>" class="img-circle" style="width:56px;height:56px;"></li></span>
         
             
						
                    </nav>
                </section>
            </header>
        
    </div>