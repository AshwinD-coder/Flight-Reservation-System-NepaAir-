<?php

include('partials/navbar.php');

?>



<link rel="stylesheet" href="partials/style.css" type="">
<link rel="stylesheet" href="partials/footer.css" />
<div>
                <?php

  include("connection.php");


if (isset($_POST['submit'])) {
	
    $trip = $_POST['trip'];
	$fromAirport = $_POST['from'];
	$toAirport = $_POST['to'];
    $Depart = $_POST['departure'];
	$Return = $_POST['return'];
	$seatclass = $_POST['cabin'];
    $noofpassenger=$_POST['guests'];
    $_SESSION['nop']= $noofpassenger;
    
    	$query = "SELECT * FROM availableflights WHERE  fro_m='$fromAirport' AND t_o='$toAirport' AND departur_e = '$Depart' AND retur_n='$Return' ";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            echo "Showing Flights Available For <b>$fromAirport</b> to <b>$toAirport</b>:";
        	while(($row = mysqli_fetch_row($result))!=null)
	{   
       $row[8]=$row[8]-$row[5];
       echo "<table border = '2' style='border-collapse:collapse;'><tr><th>From</th><th>To</th><th>Departure Date</th><th>Return Date</th><th>Cabin</th><th>Seats available</th><th>Trip Type</th><th>Price Per Ticket</th><th></th></tr>";
       
        echo "<tr>";
        
    echo "<td>" .$row[1] ."</td>";
    echo "<td>" .$row[2] ."</td>";    echo "<td>" .$row[3] ."</td>"; echo "<td>" .$row[4] ."</td>"; /*echo "<td>" .$row[] ."</td>";*/echo "<td>" .$row[6] ."</td>";  echo "<td>" .$row[8] ."</td>";echo "<td>" .$row[7] ."</td>"; echo "<td>" .$row[10] ."</td>"; echo"<td><a href='login.php?id=$row[0]' style='text-decoration:none; color:white;'>Book Flight</a></td>";
    echo "</tr>";
    echo "</table>";   
    
    }
}
else {
    echo("<b>We are sorry! We do not have any  flights for this route at the moment.</b>");  echo "<br>";
   
   }

} 
              


  ?> 
  <?php

include('partials/footer.php');

?>