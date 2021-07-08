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

	$ch="SELECT username FROM signup WHERE username='$username'";
	$result=mysqli_query($conn,$ch);

if(mysqli_num_rows($result)>0)
{
	echo "User already exists!";
}

else{


	$enc = base64_encode($password);


	
	mysqli_query($conn, "INSERT INTO users (username, password, presentaddress , email , phone ,fullname,country ,permnentaddress ,NID) VALUES ('$username', '$enc', '$presentaddress', '$email', '$phone' ,'$fullname','$fullname','$address','$nid'");
	session_start();
            $_SESSION['phone']=$_POST['phone'];

	$food = mysqli_query($conn, "SELECT * FROM food");
	while($row = mysqli_fetch_assoc($food)){
		echo $row["FOODNAME"];
	}
header("location:index.php");


	
}




}
?>