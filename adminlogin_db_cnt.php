<?php
include("../connection.php");
if(isset($_POST['submit'])){
    $fullname=$_POST['full-name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$address = $_POST['p_address'];
    $presentaddress = $_POST['presentaddress'];
 
	$email = $_POST['email'];
	$phone = $_POST['phone'];
    $nid=$_POST['nid-number'];
    $eid=$_POST['eid-number'];

	$ch="SELECT username FROM adminusers WHERE username='$username'";
	$result=mysqli_query($conn,$ch);

if(mysqli_num_rows($result)>0)
{
	echo '<script>alert("User already exists!")</script>';
}

else{


	$enc = base64_encode($password);

    
	
	mysqli_query($conn, "INSERT INTO adminusers (fullname, username, password,phonenumber, presentaddress, permnentaddress, NID, EmpID,Email) VALUES ('$fullname','$username','$enc',$phone,'$presentaddress','$address',$nid,$eid,'$email')");
	session_start();
          
	}
header("location:index.php");


	
}






?>