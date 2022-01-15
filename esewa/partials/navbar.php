<?php
 include('connection.php');
?>


<!doctype html>
<html lang="en">
  <head>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css"/>

	<!-- <link rel="stylesheet" href="style.css" type=""> -->

    <title>Nepaair</title>

    <style type="text/css">
    	.hidden{
    		display: none;
    	}
    	
		a {
		
			padding :  10px;
			color:Black;
			text-decoration:none;

			
		}
		a:hover{
			color:Black;
			font-weight:bold;
			
		}
	
    </style>
  </head>

 
  <body>
    

  	<div class="container">
  		
  		<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
  			<a href=" " class="navbar-brand"> 
  				<span class=""> NEPA AIR</span>
  				
  				<img src="img/logo.png" alt="bootstrap-5 logo" width="50" height="34" 
  						class="d-inline-block aline-top">
  			</a>
  			<button
  				class="navbar-toggler "
  				type="button"
  				data-bs-toggle="collapse"
  				data-bs-target="#toggleMobileMenu"
  				aria-controls="#toggleMobileMenu"
  				aria-expanded="false"
  				aria-lable="Toggle navigation"
  			>
  			<span class="navbar-toggler-icon"></span>
  				
  			</button>
  			<div class="collapse navbar-collapse" id="toggleMobileMenu"> 

  				<ul class="navbar-nav text-left ms-auto mn" >
				  

    			<li><a class="nav-link" href="index.php">Home</a></li>
    			<li><a class="nav-link" href="">Flight Detail</a></li>
    			<li><a class="nav-link" href="">About Us</a></li>
			
				<?php





session_start();

if(isset($_SESSION['username'])){
$_user=$_SESSION['username'];
echo"
<div class='collapse navbar-collapse' id='toggleMobileMenu'> 

  				<ul class='navbar-nav text-left ms-auto mn' >
				  ";
				  
    echo"<li><a  class='nav-link' href='Profile.php'>"; echo "$_user"; echo"</a></li>";
    echo"<li><a class='nav-link' href='logout.php'>Log Out</a></li>";

}
else{
	echo "<li><a  class='nav-link' href='signup.php'>Sign up</a></li>";
	echo "<li><a class='nav-link' href='login.php'>Log in</a></li>";
}
      






		?>	
    		</ul>

  			</div>
  		</nav>
  	</div>


   