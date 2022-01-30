<?php
include('connection.php');
session_start();
$pass=$_SESSION['nop'];
$user=$_SESSION['username'];
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
    if($pass<=3){
if($pass==1)
{
    $_11=$_POST['fname1'];
    $_12=$_POST['lname1'];
    $_13=$_POST['age1'];
    $_14=$_POST['doctype1'];
    $_15=$_POST['docnum1'];
    $_16=$_POST['gender1'];
        $query="INSERT INTO passengerdetail(FlightNO,BookedByUser,p1fname,p1lastname,p1age,p1doctype,p1docnum,p1gender)
        VALUES('NA-$f','$user','$_11','$_12','$_13','$_14','$_15','$_16')";
mysqli_query($conn,$query) 
or die (mysqli_error("Error"));
        
}

    else if($pass==2)
{
    $_11=$_POST['fname1'];
    $_12=$_POST['lname1'];
    $_13=$_POST['age1'];
    $_14=$_POST['doctype1'];
    $_15=$_POST['docnum1'];
    $_16=$_POST['gender1'];
    $_21=$_POST['fname2'];
    $_22=$_POST['lname2'];
    $_23=$_POST['age2'];
    $_24=$_POST['doctype2'];
    $_25=$_POST['docnum2'];
    $_26=$_POST['gender2'];
    $query="INSERT INTO passengerdetail(FlightNO,BookedByUser,p1fname,p1lastname,p1age,p1doctype,p1docnum,p1gender,p2fname,p2lastname,p2age,p2doctype,p2docnum,p2gender)
        VALUES('NA-$f','$user','$_11','$_12','$_13','$_14','$_15','$_16','$_21','$_22','$_23','$_24','$_25','$_26')";
mysqli_query($conn,$query) 
or die (mysqli_error("Error"));
        
}
else{
    $_11=$_POST['fname1'];
    $_12=$_POST['lname1'];
    $_13=$_POST['age1'];
    $_14=$_POST['doctype1'];
    $_15=$_POST['docnum1'];
    $_16=$_POST['gender1'];
    $_21=$_POST['fname2'];
    $_22=$_POST['lname2'];
    $_23=$_POST['age2'];
    $_24=$_POST['doctype2'];
    $_25=$_POST['docnum2'];
    $_26=$_POST['gender2'];
    $_31=$_POST['fname3'];
    $_32=$_POST['lname3'];
    $_33=$_POST['age3'];
    $_34=$_POST['doctype3'];
    $_35=$_POST['docnum3'];
    $_36=$_POST['gender3'];
    $query="INSERT INTO passengerdetail(FlightNO,BookedByUser,p1fname,p1lastname,p1age,p1doctype,p1docnum,p1gender,p2fname,p2lastname,p2age,p2doctype,p2docnum,p2gender,p3fname,p3lastname,p3age,p3doctype,p3docnum,p3gender)
    VALUES('NA-$f','$user','$_11','$_12','$_13','$_14','$_15','$_16','$_21','$_22','$_23','$_24','$_25','$_26','$_31','$_32','$_33','$_34','$_35','$_36')";
mysqli_query($conn,$query) 
or die (mysqli_error("Error"));
    
}
    }
    $query="INSERT INTO contact(user_name,Fullname,Email,Address,Address2,City,State,Zip,Passenger,Mobile,FlightNO)
    VALUES ('$user','$fullname','$email','$address1','$address2','$city','$state','$zip','$check','$mobile','NA-$f')";
   mysqli_query($conn,$query)
              or die (mysqli_error("Error"));
			    echo "<script>window.location='esewa/index.php'</script>";
}

else{
    echo "<script>alert('Error'); window.location='index.php'</script>";
}

?>
