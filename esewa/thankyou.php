
<?php
session_start();
include '../connection.php';

if(isset($_SESSION['username']) && isset($_SESSION['id']))
{

$nop=$_SESSION['nop'];
$id=$_SESSION['id'];
$query="SELECT * FROM availableflights WHERE id='$id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$from=$row['Fro_m'];
$to=$row['T_o'];
$departure=$row['Departur_e'];
$time=$row['Departuretime'];
$pass=$row['passenger_s'];
$cabin=$row['cabi_n'];
$price=$row['priceperticket'];
$totalseats=$row['Totalseats'];
$user=$_SESSION['username'];
    $price=$price*$nop;
$pass=$pass+$nop;
$flightno='NA-'.$id;
if($pass>0){
    mysqli_query($conn, "UPDATE availableflights SET status='Booking In Progress' WHERE id='$id'");
    }
mysqli_query($conn, "UPDATE availableflights SET passenger_s='$pass' WHERE id='$id'");
date_default_timezone_set("Asia/Kathmandu");
$sDate=date("Y-m-d H:i:s");
$up="UPDATE contact SET Bookeddatetime ='$sDate' WHERE  user_name='$user' AND BookingStatus=''  AND FlightNO='$flightno' ";
mysqli_query($conn,$up)
or die (mysqli_error($conn));
$fetchbookeddatetime=mysqli_query($conn,"SELECT Bookeddatetime FROM contact WHERE user_name='$user' AND BookingStatus='' AND FlightNO='$flightno'");
$fetch=$fetchbookeddatetime->fetch_assoc();
$bookeddatetime=$fetch['Bookeddatetime'];
$query2="UPDATE contact SET Passengercount='$nop' where user_name='$user' AND BookingStatus='' AND Bookeddatetime='$bookeddatetime' AND FlightNO='$flightno'";
$query="UPDATE contact SET BookingStatus='Booked' where user_name='$user' AND Passengercount='$nop' AND Bookeddatetime='$bookeddatetime' AND  FlightNO='$flightno'";

mysqli_query($conn,$query2)
or die (mysqli_error($conn));
   mysqli_query($conn,$query)
              or die (mysqli_error($conn));
            
$pop="SELECT * FROM contact WHERE user_name='$user'";
$res=mysqli_query($conn,$pop); 
$col=mysqli_fetch_assoc($res);
$email=$col['Email'];
$query2="SELECT * FROM contact WHERE user_name='$user' AND Bookeddatetime='$sDate'";
$result2=mysqli_query($conn,$query2);
$row2=mysqli_fetch_assoc($result2);
$seats=$row2['Seats'];


$flightinfo="Greetings $user,
                                Here is your flight details.
                                FlightNo-NA-$id
                                Booked time-$sDate
                                Passengers-$nop
                                From-$from
                                To-$to
                                Departure-$departure
                                Time-$time
                                Cabin-$cabin
                                Seats-$seats
                                Total amount charged-$price

                                Please bring a hard copy of this mail for ticket access at the airport.
                                
             Have a nice flight.
             NEPAAIR 
";
        mail($email,'NEPAAIR FLIGHT DETAILS',$flightinfo,'From: nepairltd@gmail.com');
        $_SESSION['bookeddatetime']=$sDate;
 
        echo "<script>window.location='thankyou2.php'</script>";
      


 session_destroy();
}
else{
    header('Location:../index.php');
  }
?>

