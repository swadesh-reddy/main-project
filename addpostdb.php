<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mainproject");
 
// Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 $productname=$_POST['productname'];
 $productcolor=$_POST['productcolor'];
 $productdescription=$_POST['productdescription']; 
 $productuses=$_POST['productuses'];
 $madeby=$_POST['madeby'];
 /* $gender=$_POST['gender'];
 $pincode=$_POST['pincode'];
 */ 
$file_dir = "uploads/";
$file_path=$file_dir . basename($_FILES["image"]["name"]);
$file=$_FILES["image"]["tmp_name"];
$image=$_FILES["image"]["name"];

// Attempt insert query execution
if(move_uploaded_file($file,$file_path))
{	
$_SESSION['user']=$username;
$sql = "INSERT INTO productpost (productname, productcolor, description, uses, madeby, photo) VALUES
       ('$productname', '$productcolor', '$productdescription', '$productuses', '$madeby', '$image')";
if($result=mysqli_query($link, $sql))
{
    echo "Records added successfully.";
	header("location: admin.php");
} 
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
// Close connection
mysqli_close($link);
?>