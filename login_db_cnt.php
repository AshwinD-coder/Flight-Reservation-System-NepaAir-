<?php
include("connection.php");
if(isset($_POST['submit'])){
    $fullname=$_POST['full-name'];
	$username = $_POST['username'];
	$password = $_POST['pass'];
	$address = $_POST['address'];
    $address = $_POST['address'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$ch="SELECT username FROM signup WHERE username='$username'";
	$result=mysqli_query($conn,$ch);

if(mysqli_num_rows($result)>0)
{
	echo "User already exists!";
}

else{


	$enc = base64_encode($password);


	
	mysqli_query($conn, "INSERT INTO signup (username, password, address, email, phone) VALUES ('$username', '$enc', '$address', '$email', $phone)");
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