<?php
include('connection.php');
session_start();
if(isset($_POST['submit'])){
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $address1=$_POST['address1'];
    $address2=$_POST['address2'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $check=$_POST['check'];
    $mobile=$_POST['mn'];
    $f=$_SESSION['id'];
    $query="INSERT INTO contact(Fullname,Email,Address,Address2,City,State,Zip,Passenger,Mobile,FlightNO)
    VALUES ('$fullname','$email','$address1','$address2','$city','$state','$zip','$check','$mobile','NA-$f')";
   mysqli_query($conn,$query)
              or die (mysqli_error("Error"));
			    echo "<script>window.location='esewa/index.php'</script>";
}
else{
    echo "<script>alert('Error'); window.location='index.php'</script>";
}
?>
