<?php
session_start();
$username=$_SESSION['username'];

$rowid=$_GET['id'];

if(isset($username))
{

echo"<script>window.location='esewa/index.php?id=$rowid'</script>";

}

else{
    echo "<script> window.location='login.php'</script>";
}





?>