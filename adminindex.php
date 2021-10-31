
<?php

include('partials/adminnavbar.php');


?><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>
<?php
$date=date('Y-m-d');

if(isset($_SESSION['name']))

{
        echo     " <br>
        <br>
              <div class='container '>
                <center><h3>Add flights:</h3></center><hr>
                <div class='booking-form'>
                <form id='form-submit' action='addflight.php' method='POST' >
                <div class='form-group'>
                <div class='row '>
                <div class='col-md-3'>
                                <label for='from'>From:</label>
                                <select required name='from'>
                                    <option value=''>Select a location...</option>
                                    <option value='Kathmandu'>Kathmandu</option>
                                    <option value='Pokhara'>Pokhara</option>
                                    <option value='Bhairahawa'>Bhairahawa</option>
                                    <option value='Biratnagar'>Biratnagar</option>
                                    <option value='Birgunj'>Birgunj</option>
                                    <option value='Lukla'>Lukla</option>
                                    <option value='Taplejung'>Taplejung</option>
                                    <option value='Nepalgunj'>Nepalgunj</option>
                                    <option value='Chitwan'>Chitwan</option>
                                    <option value='Jomsom '>Jomsom</option>
                                </select>       
                                </div>
                                <div class='col-md-3'>
                                <label for='to'>To:</label>
                                <select required name='to'>
                                    <option value=''>Select a location...</option>
                                    <option value='Kathmandu'>Kathmandu</option>
                                    <option value='Pokhara'>Pokhara</option>
                                    <option value='Bhairahawa'>Bhairahawa</option>
                                    <option value='Biratnagar'>Biratnagar</option>
                                    <option value='Birgunj'>Birgunj</option>
                                    <option value='Lukla'>Lukla</option>
                                    <option value='Taplejung'>Taplejung</option>
                                    <option value='Nepalgunj'>Nepalgunj</option>
                                    <option value='Chitwan'>Chitwan</option>
                                    <option value='Jomsom '>Jomsom</option>
                                </select>       
                                </div>
</div><br>
<div class='row'>
                <div class='col-md-3'>
                                <label for='departure' >Departure date:</label>
                                <input min=$date name='departure' type='date'  class='form-control date' id='deparure' placeholder='Select date...' required='' onchange='this.form.()'>
                                </div>
               </div><br>
                                <div class='row'>
                <div class='col-lg-3'>
                                <label for='seats'>No.of seats:</label>
                                <select required name='seats' >
                                    <option value=''>Select number of seats....</option>
                                    <option value='15'>15</option>
                                    <option value='30'>30</option>
                                    <option value='60'>60</option>
                                    <option value='90'>90</option>
                                    </select></div>
                <div class='col-lg-3'>
                                    <label for='cabin'>Cabin:</label>
                                    <select required name='cabin' >
                                    <option value=''>Select Cabin...</option>
                                    <option value='Economy'>Economy</option>
                                    <option value='Premium Economy'>Premium Economy</option>
                                    <option value='Business'>Business</option>
                                    <option value='First Class'>First Class</option>
                                    </select>
                                    </div>
                <div class='col-lg-3'><label for='priceperticket'>Price Per Ticket:</label>
                                    <select required name='price' >
                                  
                                    <option value='2000'>Rs.2000</option>
                                    <option value='4000'>Rs.4000</option>
                                    <option value='6000'>Rs.6000</option>
                                    <option value='10000'>Rs.10000</option>
                                    </select>
                                    </div></div>
              <br>
                                        <div class='row'>
                <div class='col-md-3'>
                                    
                                <label for='departuretime' >Departure time:</label>
                                <input name='departuretime' type='time' class='form-control date' id='departure' placeholder='Select time for departure...' required>
                        
                                </div>
                
</div><br>
<div class='row'>
               <div class='col'><div class='form-btn'>
									<button   class='btn btn-primary btn-md' name='submit'>Add to Database</button>
                               
</div></div>
</div>   </div> <hr>
</form></div>
<br>

";

echo "<center><h3>
Flight List :</center></h3>";
  include("connection.php");    
    	$query = "SELECT * FROM availableflights";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
           
            echo "<div class='container'>";
       echo "<table class='table table-hover table-bordered'><tr class='table table-primary'><th>Flight No</th><th>From</th><th>To</th><th>Departure Date</th><th>Departure Time</th><th>Cabin</th><th>Seats available</th><th>Price Per Ticket</th><th colspan=2><center>Action</center></th>";
       
        	while(($row = mysqli_fetch_row($result))!=null)
	{   
        $row[6]=$row[6]-$row[4];
     
        echo "<tr class='table table-secondary'>";
         
         
    
        echo "<td>NA-".$row[0]."</td>";
    echo "<td>" .$row[1] ."</td>";
    echo "<td>" .$row[2] ."</td>";    echo "<td>" .$row[3] ."</td>"; echo "<td>" .$row[9] ."</td>"; echo "<td>" .$row[5] ."</td>";  echo "<td>" .$row[6] ."</td>";echo "<td>" .$row[8] ."</td>";  
    echo "<td><a href='edit.php?id=$row[0]' class='btn btn-warning'>Edit</a></td><td><a href='confirm.php?id=$row[0]'  class='btn btn-danger'>Delete</a>";
    echo "</tr>";

    
    
   
    
    }
    echo "</table>";
    echo "<br>";

    echo "<hr>";
    echo "</div>";
    echo "</div>";  
    echo "</div>";  

    


}               
}
else{
   header('location:loginadmin.php');
}
          ?>
