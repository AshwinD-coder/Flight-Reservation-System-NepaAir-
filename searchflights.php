<?php

include('partials/navbar.php');

?>



<link rel="stylesheet" href="partials/style.css" type="">
<link rel="stylesheet" href="partials/footer.css" />
<div>
                <?php

  include("connection.php");

session_start();
if (isset($_POST['submit'])) {
	
    //$trip = $_POST['trip'];
	$fromAirport = $_POST['from'];
	$toAirport = $_POST['to'];
    $Depart = $_POST['departure'];
	// $Return = $_POST['return'];
//	$seatclass = $_POST['cabin'];
   $noofpassenger=$_POST['guests'];
   $_SESSION['nop']= $noofpassenger;
 
  

    
    	$query = "SELECT * FROM availableflights WHERE  fro_m='$fromAirport' AND t_o='$toAirport' AND departur_e = '$Depart' AND Totalseats!=passenger_s AND Totalseats>=$noofpassenger+passenger_s";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<div class='container'>";
           
             echo "Showing Flights Available For <b>$fromAirport</b> to <b>$toAirport</b>:";
       echo "<table class='table table-hover table-bordered'><tr class='table table-primary'><th>From</th><th>To</th><th>Departure Date</th><th>Departure Time</th><th>Cabin</th><th>Seats available</th><th>Price Per Ticket</th><th>Book Here<svg xmlns='http://www.w3.org/2000/svg' width='16' height=''16' fill='currentColor' class='bi bi-arrow-down-circle-fill' viewBox='0 0 16 16'>
       <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z'/>
     </svg></th></tr>";
       
        	while(($row = mysqli_fetch_row($result))!=null)
	{   
       $row[6]=$row[6]-$row[4];
     
       echo "<tr class='table table-secondary'>";
        
        
    echo "<td>" .$row[1] ."</td>";
    echo "<td>" .$row[2] ."</td>";    echo "<td>" .$row[3] ."</td>"; echo "<td>" .$row[9] ."</td>";   /*echo "<td>" .$row[] ."</td>";*/echo "<td>" .$row[5] ."</td>";  echo "<td>" .$row[6] ."</td>";echo "<td>" .$row[8] ."</td>"; echo"<td><a href='esewa/index.php?id=$row[0]'<button type='submit' class='btn btn-primary'  >Book Now</button></a></td>";
    echo "</tr>";

    
    
   
    
    }
    echo "</table>";
    echo "</div>";
    echo "</div>";  

    echo "</div>";  


}
else {echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<center>";
    echo("<b>We are sorry! We do not have any  flights for this route at the moment.</b>");  echo "<br>";
    echo "</center>";
   }

} 
              


  ?> 




  <?php

include('partials/footer.php');

?>