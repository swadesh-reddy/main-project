<?php 
session_start();
$_SESSION['user'];
	$link = mysqli_connect("localhost", "root", "", "mainproject");
    // Check connection
	if($link == false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	 $_SESSION['friend'];
    
$sql = "INSERT INTO friends (username, friend) VALUES ('".$_SESSION['user']."', '".$_SESSION['friend']."');";
$sql .= "INSERT INTO friends (friend, username) VALUES ('".$_SESSION['user']."', '".$_SESSION['friend']."');";
$sql .= "UPDATE request SET status ='accepted' WHERE   friendname = '".$_SESSION['user']."' AND status = 'waiting' AND username = '".$_SESSION['friend']."' ";	
if(mysqli_multi_query($link, $sql))
{
	$sql = "select username from  request where friendname ='".$_SESSION['user']."' AND status='waiting'";
    if( $result = mysqli_query($link, $sql))
	{
    echo $_SESSION['user'] ;
	} 
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

	
 mysqli_close($link);
 
?>