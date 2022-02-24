
 
<?php
session_start();
include '../connection.php';

$nop=$_SESSION['nop'];
$id=$_SESSION['id'];
$query="SELECT * FROM availableflights WHERE id='$id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$pass=$row['passenger_s'];
$totalseats=$row['Totalseats'];
$user=$_SESSION['username'];
    
$pass=$pass+$nop;
if($pass>0){
    mysqli_query($conn, "UPDATE availableflights SET status='Booking In Progress' WHERE id='$id'");
    }
mysqli_query($conn, "UPDATE availableflights SET passenger_s='$pass' WHERE id='$id'");
date_default_timezone_set("Asia/Kathmandu");
$sDate=date("Y-m-d H:i:s");
$up="UPDATE contact SET Bookeddatetime ='$sDate' WHERE  user_name='$user' AND BookingStatus='' ";
mysqli_query($conn,$up)
or die (mysqli_error("Error"));
$query="UPDATE contact SET BookingStatus='Booked' where user_name='$user' AND Passengercount='$nop'";
$query2="UPDATE contact SET Passengercount='$nop' where user_name='$user' AND BookingStatus=''";
mysqli_query($conn,$query2)
or die (mysqli_error("Error"));
   mysqli_query($conn,$query)
              or die (mysqli_error("Error"));
            
$pop="SELECT * FROM contact WHERE user_name='$user'";
$res=mysqli_query($conn,$pop); 
$col=mysqli_fetch_assoc($res);
$email=$col['Email'];
        mail($email,'Test Subject','Thank you for booking.','From: nepairltd@gmail.com');
        session_destroy();
    header('location:thankyou2.php');

?>

