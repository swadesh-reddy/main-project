  <?php
    $link1=mysqli_connect("localhost", "root", "", "mainproject");
  	if($link1 == false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
  $query1="select * from register where username='".$_SESSION['friend']."' ";
  $result1=mysqli_query($link1,$query1);
  while($row=mysqli_fetch_array($result1))
  {
	  
	  $pic=$row['profilepic'];
	  $profilepic="uploads/".$pic;
  }
 
  ?>