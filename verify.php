<?php
include("connection.php");
if(isset($_GET['vkey'])){
//Process Verification
$vkey=$_GET['vkey'];
$resultSet=mysqli_query($conn,"SELECT verified,vkey FROM users WHERE verified = 0 AND vkey='$vkey' LIMIT 1");
if(mysqli_num_rows($resultSet) ==1)
{
    //validate
    $update=mysqli_query($conn,"UPDATE users SET verified = 1 where vkey='$vkey' LIMIT 1");
    if($update)
    {echo "Your Account has been verified.You may now login..";
    }else
    {echo $mysqli_error;
}}
else{
    echo "This account is invalid or already verified";
}
}
else{
    die('Something went wrong.');
}
?>