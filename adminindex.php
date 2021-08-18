
<?php

include('partials/adminnavbar.php');

?>

<link rel="stylesheet" href="partials/footer.css" />

<link rel="stylesheet" href="style.css" type="">
              <div class="container ">
                <h2>Add flights:</h2>
                <div class="booking-formadmin">
                <form id="form-submit" action="addflight.php" method="POST">
                <div class="form-group">
                <div class="row ">
                <div class="col-md-3">
                                <label for="from">From:</label>
                                <select required name='from'>
                                    <option value="">Select a location...</option>
                                    <option value="Kathmandu">Kathmandu</option>
                                    <option value="Pokhara">Pokhara</option>
                                    <option value="Bhairahawa">Bhairahawa</option>
                                    <option value="Biratnagar">Biratnagar</option>
                                    <option value="Birgunj">Birgunj</option>
                                    <option value="Lukla">Lukla</option>
                                    <option value="Taplejung">Taplejung</option>
                                    <option value="Nepalgunj">Nepalgunj</option>
                                    <option value="Chitwan">Chitwan</option>
                                    <option value="Jomsom ">Jomsom</option>
                                </select>       
                                </div>
                <div class="col-md-3">
                            
                                <label for="to">To:</label>
                                <select required name='to' >
                                    <option value="">Select a location...</option>
                                    <option value="Kathmandu">Kathmandu</option>
                                    <option value="Pokhara">Pokhara</option>
                                    <option value="Bhairahawa">Bhairahawa</option>
                                    <option value="Biratnagar">Biratnagar</option>
                                    <option value="Birgunj">Birgunj</option>
                                    <option value="Lukla">Lukla</option>
                                    <option value="Taplejung">Taplejung</option>
                                    <option value="Nepalgunj">Nepalgunj</option>
                                    <option value="Chitwan">Chitwan</option>
                                    <option value="Jomsom">Jomsom</option>
                                </select>
                                </div>
</div>
<div class="row">
                <div class="col-md-3">
                                <label for="departure" >Departure date:</label>
                                <input name="departure" type="date" class="form-control date" id="deparure" placeholder="Select date..." required="" onchange='this.form.()'>
                                </div>
                <div class="col-md-3">
                                <label for="return">Return date:</label>
                                <input name="return" type="date" class="form-control date" id="return" placeholder="Select date..." required="" onchange='this.form.()'>
                                </div></div>
                                <div class="row">
                <div class="col-md-3">
                                <label for="seats">No.of seats</label>
                                <select required name='seats' >
                                    <option value="">Select number of seats....</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="60">60</option>
                                    <option value="90">90</option>
                                    </select> </div>
                <div class="col-md-3">
                                    <label for="cabin">Cabin:</label>
                                    <select required name="cabin" >
                                    <option value="">Select Cabin...</option>
                                    <option value="Economy">Economy</option>
                                    <option value="Premium Economy">Premium Economy</option>
                                    <option value="Business">Business</option>
                                    <option value="First Class">First Class</option>
                                    </select>
                                    </div>
                <div class="col-md-3">
                                    <select required name='price' >
                                    <option value="">Price Per Ticket</option>
                                    <option value="Rs.2000">Rs2000</option>
                                    <option value="Rs.4000">Rs4000</option>
                                    <option value="Rs.6000">Rs6000</option>
                                    <option value="Rs.10000">Rs10000</option>
                                    </select>
                                    </div></div>
                                    <div class="row">
                <div class="col-md-3">               
                                   <label for="round" >Round</label>
                                     <input type="radio" name="trip" id="round" value="round" required="required">
                                     </div>
                <div class="col-md-3">
                                        <label for="oneway">Oneway</label>
                                        <input type="radio" name="trip" id="oneway" value="one-way" required="required">
                            
                                        </div></div>
                                        <div class="row">
                <div class="col-md-3">
                                    
                                <label for="departuretime" >Departure time:</label>
                                <input name="departuretime" type="time" class="form-control date" id="departure" placeholder="Select time for departure..." required>
                        
                                </div>
                <div class="col-md-3">
                                <label for="returntime">Return time:</label>
                                <input name="returntime" type="time" class="form-control date" id="returntime" placeholder="Select return time..." required>
                         
                                </div>
</div>
<dv class="row">
               <div class="col"><div class="form-btn">
									<button   class="btn btn-primary btn-md" name="submit">Add to Database</button>
                               
</div></div>
</div>   </div> 
</form></div>
                            
            
          
            <?php

include('partials/footer.php');

?>
