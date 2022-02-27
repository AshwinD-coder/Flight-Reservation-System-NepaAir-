<br><br><br><br>

<?php

include('partials/navbar.php');

$pass=$_SESSION['nop'];
$user=$_SESSION['username'];
$id= $_SESSION['id'];
$k="NA-";
$id=$k.$id;
$trim= trim($id,'NA-');
echo "<div style='text-align:center;'><img src='partials/loading.gif' alt='loading'  height='300' align></div>";

echo "<Center><b>Completing final entries and finalizing booking....................</b></center>";

if(isset($_POST['form']));
{$select= $_POST['seat'];
    $select = str_replace(',', ' ', $select);

$string_length = strlen($select) - substr_count($select, ' ');
$length=$string_length/2;
}
if($length>$pass)
{
    echo "<script>alert('Please Select seats for $pass passengers!');
    window.location='seat.php';</script>";
}
else if($length<$pass)
{
    echo "<script>alert('Please select seats for $pass passengers!');window.location='seat.php';</script>";
}
else if($length==$pass)
{
    mysqli_query($conn,"UPDATE contact SET seats='$select' WHERE user_name='$user' AND FlightNO='$id'");
    $result=mysqli_query($conn,"SELECT Seatsbooked FROM availableflights WHERE id='$trim'");
    $result=$result->fetch_assoc();
    $result=$result['Seatsbooked'];
    $result=$result.' '.$select;
    mysqli_query($conn,"UPDATE availableflights SET Seatsbooked='$result' WHERE  id='$trim'");
    
    echo "<script>
    setTimeout(function(){
        window.location.href = 'esewa/thankyou.php';;
     }, 2000);</script>";

}

else
{
    die(mysqli_error($_POST['form']));
}

?>