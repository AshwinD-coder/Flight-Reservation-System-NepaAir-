<?php
include("connection.php");
if(isset($_POST['submit'])){
    $fullname=$_POST['full-name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$address = $_POST['p_address'];
    $presentaddress = $_POST['presentaddress'];
    $country=$_POST['country'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
    $nid=$_POST['nid-number'];

	$ch="SELECT username FROM users WHERE username='$username'";
	$result=mysqli_query($conn,$ch);

if(mysqli_num_rows($result)>0)
{
	echo "User already exists!";
}

else{


	$enc = base64_encode($password);

    
	
	mysqli_query($conn, "INSERT INTO users (fullname, email, username, number, presentaddress, country, permnentaddress, NID, password) VALUES ('$fullname','$email','$username',$phone,'$presentaddress','$country','$address',$nid,'$password')");
	session_start();
          
	}
header("location:index.php");


	
}






?>