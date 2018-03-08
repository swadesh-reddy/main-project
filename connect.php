<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mainproject");
 
// Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $username=$_POST['username'];
 $password=$_POST['password'];
 $email=$_POST['email']; 
 $mobile=$_POST['mobile'];
 $address=$_POST['address'];
 $date=$_POST['date'];
 $gender=$_POST['gender'];
 $pincode=$_POST['pincode'];
 $waiting = "authorise";
$file_dir = "uploads/";
$file_path=$file_dir . basename($_FILES["profilepic"]["name"]);
$file=$_FILES["profilepic"]["tmp_name"];
$profilepic=$_FILES["profilepic"]["name"];

// Attempt insert query execution
if(move_uploaded_file($file,$file_path))
{	
$_SESSION['user']=$username;
$sql = "INSERT INTO register (username, password, gender, pincode, email, mobile, address, date, profilepic, status) VALUES
       ('$username', '$password', '$gender', '$pincode', '$email', '$mobile', '$address', '$date', '$profilepic', '$waiting')";
if($result=mysqli_query($link, $sql))
{
    echo "Records added successfully.";
	header("location: userlogin.php");
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
// Close connection
mysqli_close($link);
?>