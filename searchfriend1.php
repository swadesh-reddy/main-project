<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mainproject");
 
// Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

// Attempt insert query execution
if($result=mysqli_query($link, $sql))
{
   	header("location: sendfriend.php");
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($link);
?>