<?php
session_start();
include("connection.php");
if(isset($_POST['submit1'])){
    $fullname=$_POST['full-name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2=$_POST['confirmpassword'];
	$address = $_POST['p_address'];
    $presentaddress = $_POST['presentaddress'];
 
	$email = $_POST['email'];
	$phone = $_POST['phone'];
    $nid=$_POST['nid-number'];
    $eid=$_POST['eid-number'];
	$_usernamenumber="Username Cannot be Number!";
	$_success="Account Created Successfully!";
	$_usernametaken="Username already taken!Try another!";
	$_incorrectpassword="Incorrect Password!";
	$ch="SELECT username FROM adminusers WHERE username='$username'";
	$result=mysqli_query($conn,$ch);
	// if(strlen($password)  < 8){
	// 	echo "<script>alert('Password must be upto 8 characters'); window.location='signup.php'</script>";    
	// 	die;
	// }
if(!is_numeric($username))
		{
			$sql=mysqli_query($conn, "select * from adminusers WHERE username='$username'") or die (mysqli_error("Not conn"));
			$row=mysqli_num_rows($sql);
			if ($row > 0)
			{$_SESSION['value2']=$_usernametaken;
				echo "<script> window.location='adminsuccesssignup.php'</script>";
			}
			elseif($password != $password2)
			{$_SESSION['value2']=$_incorrectpassword;
				echo "<script>window.location='adminsuccesssignup.php'</script>";
			
			}
			else
			{
				$enc = base64_encode($password);

    
	
				mysqli_query($conn, "INSERT INTO adminusers (fullname, username, password,phonenumber, presentaddress, permanentaddress, NID, EmpID,Email) VALUES ('$fullname','$username','$enc',$phone,'$presentaddress','$address',$nid,$eid,'$email')");
	
				$_SESSION['value2']=$_success;
				
			echo " <script>window.location='adminsuccesssignup.php'</script>";
		   
			}
		}
		else
		{$_SESSION['value2']=$_usernamenumber;
			echo "<script> window.location='adminsucesssignup.php'</script>";
		}
 
	


	
}






?>
