<?php
session_start();
$_SESSION['user'];
$link = mysqli_connect("localhost", "root", "", "mainproject");
 
// Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $username=$_SESSION['user'];
 $productname=$_POST['productname'];
 $friend=$_POST['select'];
 $description=$_POST['description']; 
 $date =  date("h:i:sa");
	
$sql = "INSERT INTO rproduct (username, recommandto, productname, date, description) VALUES
       ('$username', '$friend', '$productname', '$date', '$description')";
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