<?php
session_start();
$_SESSION['user'];
$link = mysqli_connect("localhost", "root", "", "mainproject");
 
// Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $username=$_SESSION['user'];
 $productname=$_GET['productname'];
 $description=$_GET['description']; 
 $date =  date("h:i:sa");
	
$sql = "INSERT INTO review (username, productname, date, details) VALUES
       ('$username', '$productname', '$date', '$description')";
if($result=mysqli_query($link, $sql))
{
    echo "Records added successfully.";
	header("location: usermainpage.php");
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>