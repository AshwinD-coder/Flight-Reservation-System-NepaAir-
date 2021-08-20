<?php

include('connection.php');


if(isset($_POST['Login']))

{
    $dec=base64_encode($_POST['password']);

    $query="SELECT * FROM `users` WHERE username='$_POST[username]' AND password='$dec'";
    $result=mysqli_query($conn,$query);

    
            

    if(mysqli_num_rows($result)!=0) {
$row=mysqli_fetch_assoc($result);
$verified=$row['verified'];
$email=$row['email'];
if($verified=='1'){
session_start();
$_SESSION['username']=$_POST['username'];
header("location: index.php");}
else{
echo "<script>alert('This account is not verified yet.Check Your Email($email).'); window.location='login.php';</script>";
}
        
    }
    else
    {
        echo "<script>alert('The username or password you entered is incorrect. '); window.location='login.php'; </script>";
        
    }
}


?>





