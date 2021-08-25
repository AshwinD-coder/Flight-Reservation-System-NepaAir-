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
mysqli_query($conn, "UPDATE availableflights SET passenger_s='$pass' WHERE id='$id'");
mysqli_query($conn, "UPDATE availableflights SET Totalseats='$totalseats' WHERE id='$id'");
if($totalseats==0){
mysqli_query($conn, "UPDATE availableflights SET booking='Booked' WHERE id='$id'");
}
if($totalseats>0){
    mysqli_query($conn, "UPDATE availableflights SET booking='Half-booked' WHERE id='$id'");
    }
echo "<br><a href='../index.php'>Go to Homepage</a>";

?>