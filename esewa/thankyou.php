<?php
session_start();
include '../connection.php';
echo "Thank you for purchasing!";
$nop=$_SESSION['nop'];
$id=$_SESSION['id'];
$query="SELECT * FROM availableflights WHERE id='$id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$pass=$row['passenger_s'];
$totalseats=$row['Totalseats'];
$pass=$pass+$nop;
$totalseats=$totalseats-$nop;
$que="UPDATE availableflights SET passenger_s=$pass AND Totalseats=$totalseats WHERE id='$id'";
$res=mysqli_query($conn,$que);
?>