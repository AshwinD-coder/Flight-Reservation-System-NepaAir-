<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<?php
include('partials/navbar.php');
include('connection.php');
$nop=$_SESSION['nop'];
$pass=$nop;
?><br><br><br>
<link href="partials/main.css?<?php echo time(); ?>" rel="stylesheet" />

<style>
    .contact-passenger-form{
        margin-left:30px;
        background-color:#c2c1c19d;;
        border-radius:15px;
        border: 0px solid ;
        margin:50px;
    }
   .form-row{
       padding:20px 20px;
   }
   .form-group{
       margin:10px;
   }
   .form-btn{
     padding:20px 20px;
   }
   hr {
border: 10px solid 	#fff8dc;
height: 10px;
/* Set the hr color */
color: #000000; /* old IE */
background-color: #333; /* Modern Browsers */
}
</style>
<script>
    $('.alert').alert()
    </script>
</head>
<div class="progress-bar-wrapper">
<script src="partials/progress-bar.js">

</script>
<script src="partials/app.js">

</script>
<div class="div"><div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey there!</strong>    Please fill the details in the form below to get flight details.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div></div>
<div class="contact-passenger-form">
        <form id="form-submit" action="database.php" method="POST">
        <div class="form-row">
        <div class="label">
    <h3>Contact Information</h3></div></div>
  <div class="form-row">
    <div class="form-group col-sm-4">
      <label for="fullname">Full Name</label>
      <input name="fullname" type="text" class="form-control" id="fullname" placeholder="First Name Last Name" required>
    </div>
    <div class="form-group col-sm-4">
      <label for="email">Email</label>
      <input name="email" type="email" class="form-control" id="email" placeholder="example@gmail.com">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input name="address1" type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group col-md-4">
    <label for="inputAddress2">Address 2</label>
    <input name="address2" type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div></div>
  
    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">City</label>
      <input  name="city" type="text" class="form-control" id="inputCity" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input name="state" type="text" class="form-control" id="inputState" required>
    
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Zip</label>
      <input  name="zip" type="text" class="form-control" id="inputZip" required>
    </div>
  </div>
<div class="form-row">
<div class="form-group col-md-12">
    <div class="form-check">
      <input name="check" class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Are you the passenger going on this flight?
      </label>
    
    </div>
</div>
<div class="form-group col-md-12">
<label for="inputnumber">Mobile No.</label>
      <input name="mn" type="phonenumber" class="form-control" id="inputnumber" value="+977" required>
</div>
</div>



<hr >

<div class="form-row">
<div class="label">
<?php
if($pass<=3){
  echo"
    <h3>Passenger Details</h3>
    </div></div>";


for($i=1;$i<=$pass;$i++ )
{;echo "<p style='color:Green; font-weight:bold; style='margin-left:20px;'>$i.Passenger</p>
   <div class='form-row' '>
    <div class='col-md-4'>
      <input type='text' class='form-control' placeholder='First name' name='fname$i' required>
    </div>
    <div class='col-md-4'>
      <input type='text' class='form-control' placeholder='Last name' name='lname$i'required>
    </div>
    <div class='col-md-4'>
      <input type='number' class='form-control' placeholder='Age' min=0 name='age$i' required>
    </div>
  </div>
  <div class='form-row' '>
  <div class='col-md-4'>
      <label type='form-control'>Document Type</label>
      <select class='form-select' name='doctype$i' required>
      <option value='Citizenship'>Citizenship</option>
      <option value='Passport'>Passport</option>
      <option value='ID Card'>ID Card</option>
</select>
    </div>
 
    <div class='col-md-4'>
    <label type='form-control'>Document Number</label>
      <input required type='text' class='form-control' placeholder='eg.136966-2312-3742' name='docnum$i'>
    </div>
   
    
    <div class='col-md-4'>
    <label type='form-control'>Gender</label>
    <div class='form-check'>
  <input class='form-check-input' type='radio' value='male' id='flexRadioDefault1' name='gender$i'>
  <label class='form-check-label' for='flexRadioDefault1'>
    Male
  </label>
</div> 
<div class='form-check'>
  <input class='form-check-input' type='radio' value='female'  id='flexRadioDefault2' name='gender$i'>
  <label class='form-check-label' for='flexRadioDefault2'>
   Female
  </label>
</div>
</select>
    </div>
    </div>
    
  ";
}
}
?>
 <center>
    <div class='col-md-3'>
      <div class='form-btn'>
        <button  type='submit' class='btn btn-success btn-lg' name='submit'>Submit</button>
      </div></center>
    </div>
</form>