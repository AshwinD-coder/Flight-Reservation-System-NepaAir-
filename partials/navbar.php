<?php
 include('connection.php');
?>


<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css"/>

	<link rel="stylesheet" href="style.css" type="">

    <title>Nepaair</title>

    <style type="text/css">
    	.hidden{
    		display: none;
    	}
    	
		a {
		
			padding :  10px;
			color:Grey;
			text-decoration:none;

			
		}
		a:hover{
			color:black;
			
		}
	
    </style>
  </head>

 
  <body>
    

  	<div class="container">
  		
  		<nav class="navbar navbar-expand-md navbar-light bg-light">
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
				  
    echo"<li><a  href='Profile.php'>"; echo "$_user"; echo"</a></li>";
    echo"<li><a  href='logout.php'>Log Out</a></li>";

}
else{  echo"
	<div class='collapse navbar-collapse' id='toggleMobileMenu'> 
	
					  <ul class='navbar-nav text-left ms-auto mn' >
					  ";
        echo"<li><a   href='signup.php'>Sign up</a></li>";
	echo"<li><a  href='login.php'>Log in</a></li>";

	}




		?>	
    		</ul>

  			</div>
  		</nav>
  	</div>


   