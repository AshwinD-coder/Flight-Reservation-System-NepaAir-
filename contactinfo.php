<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<?php
include('partials/navbar.php');
include('connection.php');
?><br><br><br>
<head>
    <style>
        .contact-passenger-form{
            margin-left:30px;
            background-color:#C0C0C0;
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
<div class="div"><div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey there!</strong>    Please fill the details in the form below to get flight details.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div></div>
<div class="contact-passenger-form">
        <form action="database.php" method="POST">
    
     
  <div class="form-row">
  <div class="label">
    <h3>Contact Information</h3></div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-4">
      <label for="fullname">Full Name</label>
      <input type="text" class="form-control" id="fullname" placeholder="First Name Last Name" required>
    </div>
    <div class="form-group col-md-4">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
    </div>
    </div>
    <div class="form-row">
  <div class="form-group col-md-4">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
    
  <div class="form-group col-md-4">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" required>
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input type="text" class="form-control" id="inputState" required>
    
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" required>
    </div>
  </div><br>
<div class="form-row">
<div class="form-group col-md-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Are you the passenger going on this flight?
      </label>
    
    </div>
    </div>
</div>
</div>
<hr >
<div class="form-row">
<div class="label">
    <h3>Passenger Details</h3>
    </div></div>
<?php
// for($i=1;$i<=$pass;$i++ )
// {
//     echo "<div>"
// }
?>