
<?php 
  session_start();
  include("includes/connection.php");
  include("includes/functions.php");

if(isset($_POST['submit'])){
$from=$_POST['from'];
$to=$_POST['to'];
$departure=$_POST['departure'];
$return=$_POST['return'];
$seats=$_POST['seats'];
$cabin=$_POST['cabin'];
$trip=$_POST['trip'];
$book='notbooked';
$price=$_POST['price'];
$deptime=$_POST['departuretime'];

$rettime=$_POST['returntime'];
mysqli_query($conn, "INSERT INTO availableflights(Fro_m,t_o,departur_e,retur_n,cabi_n,tri_p,totalseats,Booking,priceperticket,departuretime,returntime)
			    VALUES ('$from','$to','$departure','$return','$cabin','$trip','$seats','$book','$price','$deptime','$rettime')")
                 or die (mysqli_error("Error"));
			    echo "<script>alert('added to database'); window.location='admin.php'</script>";
}
else{
    echo "<script>alert('Not added to database'); window.location='admin.php'</script>";
}
?>




                    