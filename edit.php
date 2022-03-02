<?php

include('partials/adminnavbar.php');

?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<?php
include('connection.php');
$f='Fro_m';
$to='T_o';
$d='departur_e';
$t='Departuretime';
$c='cabi_n';
$status='Status';
$p='priceperticket';
if(isset($_GET['id']))
{
 $id=$_GET['id']; 
 $query="SELECT * FROM availableflights WHERE id='$id'";
 $result=mysqli_query($conn,$query);
 echo "<h1><center>Edit Flight Info</h1></center>";
 echo "<table class='table table-hover table-bordered'><tr class='table table-primary'><th>Flight No</th><th>From</th><th>To</th><th>Departure Date</th><th>Departure Time</th><th>Cabin</th><th>Price Per Ticket</th><th>Seats</th><th>Status</th>";     
 while(($row = mysqli_fetch_row($result))!=null)
{   
$row[6]=$row[6]-$row[4];
echo "<tr class='table table-secondary'>";
echo "<td>NA-".$row[0]."</td>";
echo "<td>" .$row[1]."<a href='edit2.php?id=$id&value=$row[1]&index=$f'><i class='bi bi-pencil'></i>"."</td>";
echo "<td>" .$row[2]."<a href='edit2.php?id=$id&value=$row[2]&index=$to'><i class='bi bi-pencil'></i><a>".  "</td>";    echo "<td>" .$row[3]."<a href='edit2.php?id=$id&value=$row[3]&index=$d'><i class='bi bi-pencil'></i><a>"  ."</td>";
echo "<td>" .$row[9]."<a href='edit2.php?id=$id&value=$row[9]&index=$t'><i class='bi bi-pencil'></i><a>"  ."</td>"; 

echo "<td>" .$row[5]."<a href='edit2.php?id=$id&value=$row[5]&index=$c'><i class='bi bi-pencil'></i><a>"  ."</td>"; 

echo "<td>" .$row[8]."<a href='edit2.php?id=$id&value=$row[8]&index=$p'><i class='bi bi-pencil'></i><a>"  ."</td>"; 
echo "<td>" .$row[10]."</td>"; 
echo "<td>" .$row[7]."<a href='edit2.php?id=$id&value=$row[7]&index=$status'><i class='bi bi-pencil'></i><a>"  ."</td>"; 

echo "</tr>";
}
echo "</table>";
}  
else
{
    die('Something went wrong.');
}

?>

