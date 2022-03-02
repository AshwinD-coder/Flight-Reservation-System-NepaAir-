<?php
session_start();
$username=$_SESSION['username'];

$rowid=$_GET['id'];
$_SESSION['id']=$rowid;
if(isset($username))
{

echo"<script>window.location='contactinfo.php'</script>";

}

else{
    echo "<script> window.location='login.php'</script>";
}
?>