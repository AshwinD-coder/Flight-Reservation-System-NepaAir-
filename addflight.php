
<?php 
  session_start();
  include("connection.php");
  

if(isset($_POST['submit'])){
$from=$_POST['from'];
$to=$_POST['to'];
$departure=$_POST['departure'];

$seats=$_POST['seats'];
$cabin=$_POST['cabin'];

$book='Not Booked';
$price=$_POST['price'];
$deptime=$_POST['departuretime'];


mysqli_query($conn, "INSERT INTO availableflights(Fro_m,t_o,departur_e,cabi_n,totalseats,Status,priceperticket,departuretime)
			    VALUES ('$from','$to','$departure','$cabin','$seats','$book','$price','$deptime')")
                 or die (mysqli_error("Error"));
			    echo "<script>alert('added to database'); window.location='adminindex.php'</script>";
}
else{
    echo "<script>alert('Not added to database'); window.location='adminindex.php'</script>";
}
?>




                    