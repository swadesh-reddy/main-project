<?php 
session_start();
$_SESSION['user'];
 $_SESSION['friend'];
	$link = mysqli_connect("localhost", "root", "", "mainproject");
    // Check connection
	if($link == false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 $status="waiting";
	    $date = date("d-m-y h:i:sa");
     
	 $result1 = mysqli_query($link, "SELECT * FROM request WHERE username = '".$_SESSION['user']."' AND friendname ='".$_SESSION['friend']."'");
        $count = mysqli_num_rows($result1); 	
		if($count > 0)
		 {
			  echo "<script type='text/javascript'>if(confirm('request already sent')){document.location.href='searchfriend.php'}</script>";

		 }
	 else
	 {
	   $sql = "INSERT INTO request (username, friendname, status, date) VALUES
       ('".$_SESSION['user']."', '".$_SESSION['friend']."', '$status', '$date')";
   if($result=mysqli_query($link, $sql))
     {   
    echo "<script type='text/javascript'>document.location.href='usermainpage.php'</script>";
	  
    } 
  else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
   }
			
		
	 }
	
 mysqli_close($link);
?>