
<?php

include('partials/adminnavbar.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="shortcut icon" href="includes/img/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="includes/style1.css?<?php echo time(); ?>" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    	<title>Khwopa Airways</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body{
    background-image:   url("includes/img/admin.jpg");
    height: 110vh; 
    background-position: center;
    background-size: cover;
   
    margin: 0px;
 }
 header{
     
width: 100%;
background-color: rgba(0,0, 0, .1);
padding-left:-20px
 }
 </style>
    </head>
<body>
    <header>
        <div class="header">
            
                <img src="includes/img/logo.png" style="width:150px; border-radius:70%; height:145px; margin-top: 5px; margin-bottom: 5px ;" alt="Flight Template">
                <ul id="right">
                    
                <li><a href="availableflights.php">Available Flights</li></a>
                        <li><a href="deleteflights.php">Delete Flights</li></a>
                        <li><a href="viewusers.php">View Users</li></a>
                        <li><a href="viewbookedflights.php">View Booked Flights</li></a>
                      
                     
                        <?php
                      
                        include("includes/connection.php");
                        include("includes/functions.php");
                        if(isset($_POST['admin'])){
                        $userinfo=$_POST['user_name'];
                        echo "<p style='text-align:right;''>Logged in as:<b>$userinfo</b></p>";
                        }
                       
                        ?>
                        <p style="text-align:right;"><a href="logout.php">Logout</a></p>
</ul>
                        
                        
                        <br>
                         <br>
                        
            </ul>
          </div>
        </header>
        <div class="fieldset">
                <center>
                <h2 text-align="center">Add flights:</h2>
                <form id="form-submit" action="adminpageaddflights.php" method="POST">
                        <fieldset>
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
                            </fieldset>
                            <fieldset>
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
                            </fieldset>
                                <fieldset>
                                <label for="departure" >Departure date:</label>
                                <input name="departure" type="date" class="form-control date" id="deparure" placeholder="Select date..." required="" onchange='this.form.()'>
                            </fieldset>
                                <fieldset>
                                <label for="return">Return date:</label>
                                <input name="return" type="date" class="form-control date" id="return" placeholder="Select date..." required="" onchange='this.form.()'>
                            </fieldset>
                            <fieldset>
                                <label for="seats">No.of seats</label>
                                <select required name='seats' >
                                    <option value="">Select number of seats....</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="60">60</option>
                                    <option value="90">90</option>
                                    </select>
                                    <label for="cabin">Cabin:</label>
                                    <select required name="cabin" >
                                    <option value="">Select Cabin...</option>
                                    <option value="Economy">Economy</option>
                                    <option value="Premium Economy">Premium Economy</option>
                                    <option value="Business">Business</option>
                                    <option value="First Class">First Class</option>
                                    </select>
                                    
                                    <select required name='price' >
                                    <option value="">Price Per Ticket</option>
                                    <option value="Rs.2000">Rs2000</option>
                                    <option value="Rs.4000">Rs4000</option>
                                    <option value="Rs.6000">Rs6000</option>
                                    <option value="Rs.10000">Rs10000</option>
                                    </select>
                                    </fieldset>
                            <fieldset>                            
                                   <label for="round" >Round</label>
                                     <input type="radio" name="trip" id="round" value="round" required="required">
                                    
                                        <label for="oneway">Oneway</label>
                                        <input type="radio" name="trip" id="oneway" value="one-way" required="required">
                            
                     
                                    
                                <label for="departuretime" >Departure time:</label>
                                <input name="departuretime" type="time" class="form-control date" id="departure" placeholder="Select time for departure..." required>
                        
                          
                                <label for="returntime">Return time:</label>
                                <input name="returntime" type="time" class="form-control date" id="returntime" placeholder="Select return time..." required>
                            </fieldset>
                            
                               
                                <input name="submit" type="submit" id="form-submit" value="Add flights to Database"  class="btn"></input>
</form>
                              </center>
            </div>    
          <footer class="footer-distributed">
                               <div class="footer-left">
                    <h3>Get to know us more</h3>
                        <li><a href="#">About Us </li></a>
                        <li><a href="#">Careers </li></a>
                        <li><a href="#">Cargo </li></a>
                        <li><a href="#">Site Map </li></a>
                        <li><a href="#">FAQ </li></a>
</div>
                        <div class="footer-center">
                    <h3>Legal Policies</h3>
                        <li><a href="#">Privacy Policy </li></a>
                        <li><a href="#">Insurance Policy </li></a>
                        <li><a href="#">Terms and Condition </li></a>
</div>
                
                        <div class="footer-right">
                    <h3>Contact Us</h3>
                        <li>Tel:01-4464928,01-0572631 </li>
                        <li>Libali-7,Bhaktapur,Nepal </li>
                        <li>P.O Box 44800 </li>
                    </div>
                    <div class="footer-icons">
 <h3>Follow Us On:</h3>
		<a href="www.facebook.com/adhaugoda" ><i class="fa fa-facebook"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-instagram"></i></a>
		<a href="#"><i class="fa fa-snapchat"></i></a>
 
		</div>
                    <div class="mid-footer">
                    ©2021 Khwopa Airways Pvt.Ltd.All Rights Reserved
                    </div>
                    
                    
                  
                    </footer>

                    </body>
</html> 