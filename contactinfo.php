<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
include('partials/navbar.php');
include('connection.php');
?><br><br><br>
<head>
    <style>
        .contact-passenger-form{
            margin-left:30px;
        }
    </style>
</head>
<div class="contact-passenger-form">
        <form action="database.php" method="POST">
    
        <div class="label">
    <h3>Contact Information</h3>
  <div class="form-row">
    <div class="form-group col-sm-4">
      <label for="fullname">Full Name</label>
      <input type="text" class="form-control" id="fullname" placeholder="First Name Last Name" required>
    </div>
    <div class="form-group col-sm-4">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
    </div>
</div>
<?php
// for($i=1;$i<=$pass;$i++ )
// {
//     echo "<div>"
// }
?>