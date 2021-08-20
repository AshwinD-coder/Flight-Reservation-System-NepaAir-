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
	$_success="Account Created Successfully! Please Verify Your Email Address";
	$_usernametaken="Username already taken!Try another!";
	$_incorrectpassword="Incorrect Password!";
	$ch="SELECT username FROM users WHERE username='$username'";
	$result=mysqli_query($conn,$ch);
	// if(strlen($password)  < 8){
	// 	echo "<script>alert('Password must be upto 8 characters'); window.location='signup.php'</script>";    
	// 	die;
	// }
	
	//Sanitize form data
// $fullname=$mysqli->real_escape_string($fullname);
// $username=$mysqli->real_escape_string($username);
// $password=$mysqli->real_escape_string($password);
// $address=$mysqli->real_escape_string($address);
// $presentaddress=$mysqli->real_escape_string($presentaddress);
// $nid=$mysqli->real_escape_string($nid);
// $email=$mysqli->real_escape_string($email);
// $phone=$mysqli->real_escape_string($phone);
// $country=$mysqli->real_escape_string($country);

//Generate Vkey

$vkey=md5(time().$username);

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

    
	
				$insert=mysqli_query($conn, "INSERT INTO users (fullname, email, username, number, presentaddress, country, permnentaddress, NID, password,vkey) VALUES ('$fullname','$email','$username',$phone,'$presentaddress','$country','$address',$nid,'$enc','$vkey')");
				$_SESSION['value']=$_success;
				if($insert)
				{
					$to=$email;
					$subject="Email Verification";
					$message="<a href='https://localhost/fosp/Github/Project5Sem/verify.php?vkey=$vkey'>Register Account</a>";
					$headers="From: nepairltd@gmail.com \r\n";
					$headers .="MIME-Version: 1.0"."\r\n";
					$headers .="Content-type:text/html;charset=UTF-8"."\r\n";
					mail($to,$subject,$message,$headers);
				
				}
				else{
					echo $mysqli->error;
				}
			echo " <script>window.location='successsignup.php'</script>";
		   
			}
		}
		else
		{$_SESSION['value']=$_usernamenumber;
			echo "<script> window.location='successsignup.php'</script>";
		}
 
	


	
}






?>