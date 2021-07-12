<?php
session_start();
include("connection.php");
if(isset($_POST['submit'])){
    $fullname=$_POST['full-name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2=$_POST['confirmpassword'];
	$address = $_POST['p_address'];
    $presentaddress = $_POST['presentaddress'];
    $country=$_POST['country'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
    $nid=$_POST['nid-number'];
	$_usernamenumber="Username Cannot be Number!";
	$_success="Account Created Successfully!";
	$_usernametaken="Username already taken!Try another!";
	$_incorrectpassword="Incorrect Password!";
	$ch="SELECT username FROM users WHERE username='$username'";
	$result=mysqli_query($conn,$ch);
	// if(strlen($password)  < 8){
	// 	echo "<script>alert('Password must be upto 8 characters'); window.location='signup.php'</script>";    
	// 	die;
	// }
		if(!is_numeric($username))
		{
			$sql=mysqli_query($conn, "select * from users WHERE username='$username'") or die (mysqli_error("Not conn"));
			$row=mysqli_num_rows($sql);
			if ($row > 0)
			{$_SESSION['value']=$_usernametaken;
				echo "<script> window.location='successsignup.php'</script>";
			}
			elseif($password != $password2)
			{$_SESSION['value']=$_incorrectpassword;
				echo "<script>window.location='successsignup.php'</script>";
			
			}
			else
			{
				$enc = base64_encode($password);

    
	
				mysqli_query($conn, "INSERT INTO users (fullname, email, username, number, presentaddress, country, permnentaddress, NID, password) VALUES ('$fullname','$email','$username',$phone,'$presentaddress','$country','$address',$nid,'$enc')");
				$_SESSION['value']=$_success;
				
			echo " <script>window.location='successsignup.php'</script>";
		   
			}
		}
		else
		{$_SESSION['value']=$_usernamenumber;
			echo "<script> window.location='successsignup.php'</script>";
		}
 
	


	
}






?>