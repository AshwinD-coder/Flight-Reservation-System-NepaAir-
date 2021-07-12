<?php
session_start();
include("connection.php");
if(isset($_POST['submit1'])){
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
	// if(strlen($password)  < 8){
	// 	echo "<script>alert('Password must be upto 8 characters'); window.location='signup.php'</script>";    
	// 	die;
	// }
		if(!is_numeric($username))
		{
			$sql=mysqli_query($conn, "select * from users WHERE username='$username'") or die (mysqli_error("Not conn"));
			$row=mysqli_num_rows($sql);
			if ($row > 0)
			{
				echo "<script>alert('Username already taken!!. Try another!'); window.location='signup.php'</script>";
			}
			elseif($password != $password2)
			{
				echo "<script>alert('Password do not match!'); window.location='signup.php'</script>";
			
			}
			else
			{
				$enc = base64_encode($password);

    
	
	mysqli_query($conn, "INSERT INTO adminusers (fullname, username, password,phonenumber, presentaddress, permanentaddress, NID, EmpID,Email) VALUES ('$fullname','$username','$enc',$phone,'$presentaddress','$address',$nid,$eid,'$email')");
	
					  echo "<div class='w3-panel w3-green'>";
			echo "<script>alert('Account successfully created!'); window.location='index.php'</script>";
		   echo "</div>";
			}
		}
		else
		{
			echo "<script>alert('Username cannot be a number'); window.location='signup.php'</script>";
		}
}
?>
