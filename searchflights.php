

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
 <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
</svg>

<link rel="stylesheet" href="partials/style.css" type="">
<link rel="stylesheet" href="partials/footer.css" />
<div>
                <?php

  include("connection.php");

  include('partials/navbar.php');

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
           
             echo "Showing Flights Available From <b>$fromAirport</b> to <b>$toAirport</b>:<br><hr>";
       echo "<table class='table table-hover table-bordered'><tr class='table table-primary'><th>From</th><th>To</th><th>Departure Date</th><th>Departure Time</th><th>Flight No</th><th>Cabin</th><th>Price Per Ticket</th><th>Book Here \t<svg xmlns='http://www.w3.org/2000/svg' width='16' height=''16' fill='currentColor' class='bi bi-arrow-down-circle-fill' viewBox='0 0 16 16'>
       <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z'/>
     </svg></th></tr>";
       
        	while(($row = mysqli_fetch_row($result))!=null)
	{   
       $row[6]=$row[6]-$row[4];
     
       echo "<tr class='table table-secondary'>";
        
        
    echo "<td>" .$row[1] ."</td>";
    echo "<td>" .$row[2] ."</td>";    echo "<td>" .$row[3] ."</td>"; echo "<td>" .$row[9] ."</td>";  echo "<td>NA-" .$row[0] ."</td>"; /*echo "<td>" .$row[] ."</td>";*/echo "<td>" .$row[5] ."</td>";  echo "<td>" .$row[8] ."</td>"; echo"<td><a href='checking.php?id=$row[0]' <button type='submit' class='btn btn-primary'  >Book Now</button></a></td>";
    echo "</tr>";

    
    
   
    
    }
    echo "</table>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "</div>";
    echo "</div>";  

    echo "</div>";  


}
else {echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<center>";
    echo "<div class='alert alert-danger d-flex align-items-center' role='alert'>
    <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
    <div>
      We are Sorry! \t We do not have flights for this choice at the moment. \t \t \t \t  \t \t<a href='index.php'><button type='button' class='btn btn-outline-danger'>Search Again</button></a>
    </div>
  </div>";
   
    
    echo "<br>";
    echo "<br>";
    echo "<div class='alert alert-primary d-flex align-items-center' role='alert' style='width:50%;'>
    <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Info:'><use xlink:href='#info-fill'/></svg>
    <div>
      <i>Try searching the flights for upcoming dates or next destination.</i>
    </div>
  </div>
    ";
    echo "<br>";
    echo "<br>";
    
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "</center>";
   }

} 
              


  ?> 


  <?php

include('partials/footer.php');

?>