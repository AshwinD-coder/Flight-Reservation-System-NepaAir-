<br><br><br><br>
<?php

include('partials/navbar.php');
$pass=$_SESSION['nop'];
$user=$_SESSION['username'];
$id= $_SESSION['id'];
$k="NA-";
echo $id;
$id=$k.$id;
$trim= trim($id,'NA-');
if(isset($_POST['form']));
{$select= $_POST['seat'];
}
echo $select;
$string_length = strlen($select) - substr_count($select, ' ');
echo $string_length;
$length=$string_length/2;
if($length>$pass)
{
    echo "<script>alert('Please Select seats for $pass passengers!');window.location='seat.php';</script>";
}
if($length<$pass)
{
    echo "<script>alert('Please select seats for $pass passengers!');window.location='seat.php';</script>";
}
if($length==$pass)
{
    mysqli_query($conn,"UPDATE contact SET seats='$select' WHERE user_name='$user' AND FlightNO='$id'");
    $result=mysqli_query($conn,"SELECT Seatsbooked FROM availableflights WHERE id='$trim'");
    $result=$result->fetch_assoc();
    $result=$result['Seatsbooked'];
    $result=$result.' '.$select;
    mysqli_query($conn,"UPDATE availableflights SET Seatsbooked='$result' WHERE  id='$trim'");
    
    echo "<script>window.location='esewa/thankyou2.php';</script>";

}

?>
