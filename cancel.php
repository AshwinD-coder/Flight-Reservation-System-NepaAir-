<?php

include('partials/navbar.php');
$user=$_SESSION['username'];
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  
}
if(isset($_GET['cancel']))
{
    $id=$_GET['cancel'];
   
    
    $query="UPDATE contact set BookingStatus='Cancelled' WHERE user_name='$user' AND FLightNO='$id'";

    date_default_timezone_set("Asia/Kathmandu");
    $sDate=date("Y-m-d H:i:s");
    $query2="UPDATE contact set CancelledTime='$sDate' WHERE user_name='$user' AND FLightNO='$id'";
   
    $trim= trim($id,'NA-');
    $query3="SELECT priceperticket FROM availableflights WHERE id='$trim'";
    $price=mysqli_query($conn,$query3);
    $result=mysqli_query($conn,"SELECT * FROM availableflights WHERE id='$trim'");
    $row = mysqli_fetch_row($result);
    $dt=$row[3].' '.$row[9].':00';
    $dt2=mysqli_query($conn,"SELECT CancelledTime FROM contact WHERE user_name='$user' AND FlightNO='$id'");
    $pass=mysqli_query($conn,"SELECT Passengercount FROM contact WHERE user_name='$user' AND FlightNO='$id'");
    $pass = $pass -> fetch_assoc();
    $pass=$pass['Passengercount'];
$dt2 = $dt2 -> fetch_assoc();
$price = $price -> fetch_assoc();
    $dt=strtotime($dt);
    $dt2=strtotime($dt2['CancelledTime']);
    $try=$dt-$dt2;
    $p=$price['priceperticket'];
  
    $seat=mysqli_query($conn,"SELECT Seats FROM contact WHERE user_name='$user' AND FlightNO='$id'");
    $bookedseat=mysqli_query($conn,"SELECT Seatsbooked FROM availableflights WHERE  id='$trim'");
    $bookedseat=$bookedseat->fetch_assoc();
    $seat=$seat->fetch_assoc();
    $seat=$seat['Seats'];
    $bookedseat=$bookedseat['Seatsbooked'];
    // $newseat=trim($bookedseat,$seat);
    $newseat= str_replace($seat,"",$bookedseat);
    // $newseat=$bookedseat-$seat;

    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    //  echo $seat;
    // echo "<br>";

    //  echo $bookedseat;
    // echo "<br>";

    //  echo $newseat;
    
    if($try<=7200)
    {
       echo "<script> alert('Flight cannot be cancelled before 2 hrs of the flight.');
       window.location='flightinfo.php';
       </script>;";
       
    }
    if($try<39600 && $try>7200){
        mysqli_query($conn,$query);
    $getpass=mysqli_query($conn,"SELECT passenger_s FROM availableflights WHERE  id='$trim'");
    $getpass=$getpass -> fetch_assoc();
    $getpass=$getpass['passenger_s'];
    $newpass=$getpass-$pass;

        $removepass=mysqli_query($conn,"UPDATE availableflights SET passenger_s='$newpass' WHERE id='$trim'");
        $removeseat=mysqli_query($conn,"UPDATE availableflights SET Seatsbooked='$newseat' WHERE id='$trim'");

        $y=mysqli_query($conn,$query2);
        
        $p=$pass*($p-(0.33*$p));
        if(mysqli_query($conn,"UPDATE contact SET Refundcash='$p' WHERE user_name='$user' AND FlightNO='$id'"))
        {
        echo "<script> alert('Flight  cancelled within 11 hrs of the flight.33% fare is levied.');
        window.location='flightinfo.php';</script>;";}
       

    }
    if($try>39600){
        mysqli_query($conn,$query);
        $getpass=mysqli_query($conn,"SELECT passenger_s FROM availableflights WHERE  id='$trim'");
        $getpass=$getpass -> fetch_assoc();
        $getpass=$getpass['passenger_s'];
        $newpass=$getpass-$pass;
    
            $removepass=mysqli_query($conn,"UPDATE availableflights SET passenger_s='$newpass' WHERE id='$trim'");
        $removeseat=mysqli_query($conn,"UPDATE availableflights SET Seatsbooked='$newseat' WHERE id='$trim'");

        $y=mysqli_query($conn,$query2);

        $p=$pass*($p-(0.11*$p));
        mysqli_query($conn,"UPDATE contact SET Refundcash='$p' WHERE user_name='$user' AND FlightNO='$id'");
        echo "<script> alert('Flight  cancelled before 11 hrs of the flight.11% fare is levied.');
        window.location='flightinfo.php';</script>;";

    }
  
  

  
}
?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

 
 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="partials/style.css?<?php echo time(); ?>" type=""><br><br><br><br>
<head>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#myModal').modal('show');
    });
</script>

    <style>
        .container li{
            font-size:large;
            font-style:bold;
        }
    </style>
</head>
<div class="container">
    <h3>Cancellation rules</h3>
    <ul>
<li>
A cancellation charge of 10% of the fare is levied if the cancellation of the ticket is done before 11 hours from flight time.</li>
<li>
A cancellation charge of 33.33% of the fare is levied if the cancellation of the ticket is done within 11 hours from flight time.</li>
<li>
Cancellation is prohibited within two (2) hours of flight time.</li>
<li>
Rescheduling of any flight can be before two hours of flight time.</li>
<li>
Passenger(s) will be treated as ‘No-Show’ if they do not Check-In within the stated reporting time. NEPA Air is not liable to refund the ticket if the passenger(s) fall under this category.</li>
<li>
Passenger Service Tax (Airport Tax) is refundable for No Show tickets.</li>
<li>
Refunds are made from the point of issue.</li>

</ul>
</div>
<div class="container">
    <h2>Do you want to cancel the flight?</h2>
    <div class=" btn col-md-1">
    <a href="cancel.php?cancel=<?php echo $id?>"><button type='button' class='btn btn-danger' >
  Proceed 
    </button></a>
</div>
    
<div class="btn col-md-1">
    <a href="flightinfo.php"><button type='button' class='btn btn-success' >
  Skip 
    </button></a>
</div>
    
