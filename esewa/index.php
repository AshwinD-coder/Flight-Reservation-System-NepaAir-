<?php
include 'setting.php';
include '../connection.php';
include('partials/navbar.php');


$nop=$_SESSION['nop'];
$id=$_SESSION['id'];

$query="SELECT * FROM availableflights WHERE id='$id'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$price=$nop*$row['priceperticket'];

?>

  


 

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay with esewa </title>
    <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style>
    body{
        margin : 100px 502px;
    }
    </style>

</head>
<body margin="100px 502px" >
    

    <div class="card" style="width:400px">
    <img src="eair.png" alt="Thulo IMS" class="card-img-top">
    <div class="card-body">
    <div class="card-title">
    Note : The price is in Nepali rupees.
    </div>
    
    <form action=<?php echo $epay_url?> method="POST">
    <input value="<?php echo $price?>" name="tAmt" type="hidden">
    <input value="<?php echo $price?>" name="amt" type="hidden">
    <input value="0" name="txAmt" type="hidden">
    <input value="0" name="psc" type="hidden">
    <input value="0" name="pdc" type="hidden">
    <input value=<?php echo $merchant_code?>  name="scd" type="hidden">
    <input value="<?php echo $pid?>" name="pid" type="hidden">
    <input value=<?php echo $successurl?> type="hidden" name="su">
    <input value=<?php echo $failedurl?> type="hidden" name="fu">
    <input value="Pay with Esewa <?php  echo  $price?>" type="submit" class="btn btn-primary">
    </form>
    </div>
    </div>



    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>