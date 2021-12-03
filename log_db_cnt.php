<?php

include('connection.php');

session_start();
if(isset($_POST['Login']))

{
    $dec=base64_encode($_POST['password']);

    $query="SELECT * FROM `users` WHERE username='$_POST[username]' AND password='$dec'";
    $result=mysqli_query($conn,$query);

    
            

    if(mysqli_num_rows($result)!=0) {
$row=mysqli_fetch_assoc($result);
$verified=$row['verified'];
$email=$row['email'];

$id=$_SESSION['id'];
if($verified=='1' && is_null($id)  ){
$_SESSION['username']=$_POST['username'];
header("location: index.php");}
else if($verified=='1' && isset($id))
{ $_SESSION['username']=$_POST['username'];
    header("location:contactinfo.php");
    
}
else if($verified=='0'){
echo "<script>alert('This account is not verified yet.Check Your Email($email).'); window.location='login.php';</script>";
}
        
    }
    else
    {
        echo "<script>alert('The username or password you entered is incorrect. '); window.location='login.php'; </script>";
        
    }
}


?>





