<?php

include('partials/navbar.php');


?>

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="partials/style.css?<?php echo time(); ?>" type="">
<link rel="stylesheet" href="partials/footer.css?<?php echo time(); ?>" type="">


<?php
echo "<br>";
echo "<br>";
echo "<br>";

echo "<tr class='table table-secondary'>";
echo "<div class='container'>";
        echo "<table class='table table-hover table-bordered'><tr class='table table-primary'><th>Flight No</th><th>From</th><th>To</th><th>Departure Date</th><th>Departure Time</th><th>Cabin</th><th>Seats available</th><th>PassengerCount</th><th>Price Per Ticket</th><th>Status</th>";
$query="SELECt * FROM availableflights";

$result = mysqli_query($conn,$query);

while (($row = mysqli_fetch_row($result)) != null){
echo "<tr>";
echo "<td>NA-" . $row[0] . "</td>";
echo "<td>" . $row[1] . "</td>";
echo "<td>" . $row[2] . "</td>";
echo "<td>" . $row[3] . "</td>";
echo "<td>" . $row[9] . "</td>";
echo "<td>" . $row[5] . "</td>";
echo "<td>" . $row[6] . "</td>";
echo "<td>" . $row[4] . "</td>";

echo "<td>" . $row[8] . "</td>";
echo "<td>" . $row[7] . "</td>";
//echo "<td>" . $row[10] . "</td>";
echo "</tr>";


}
echo "</table>";
?>

<!-- <?php

//include('partials/footer.php');


?> -->