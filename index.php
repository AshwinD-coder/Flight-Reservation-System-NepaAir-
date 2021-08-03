<?php

include('partials/navbar.php');

?>
<script>
	
	document.getELementById("demo").innerHTML="Returning";
	function noop(){
		
	};
function showreturningtime() {
	var check=document.getElementById("round").value;

  var x = document.createElement("INPUT");

  x.setAttribute("type"  , "date");
  
   
var span=document.getElementById("demo");
  x.setAttribute("class" , "form-control");
  x.setAttribute("name"  , "return");
  
  span.textContent = "Returning";
  document.getElementById("main").appendChild(x);
  

}

function delret(){
	document.getElementById("demo").innerHTML="";
	var myobj =document.getElementById("main");
	myobj.removeChild(myobj.lastElementChild);


}
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="partials/style.css?<?php echo time(); ?>" type="">

<link rel="stylesheet" href="partials/footer.css" />
<div>
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
		<div class="carousel-inner">
		  <div class="carousel-item active">
			<img src="img/carousel3.jpg" class="d-block w-100" alt="..." height="350px">
		  </div>
		  <div class="carousel-item">
			<img src="img/carousel2.jpg" class="d-block w-100" alt="..." height="350px">
		  </div>
		  <div class="carousel-item">
			<img src="img/carousel1.jpg" class="d-block w-100" alt="..." height="350px">
		  </div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
		  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
		  <span class="carousel-control-next-icon" aria-hidden="true"></span>
		  <span class="visually-hidden">Next</span>
		</button>
	  </div>
</div>





<div id="booking">
	<div class="justify-content-center">
		<div class="container">
			<div class="row">
				<div class="booking-form ">
					<form action="searchflights.php" method="POST">
						<div class="form-group">
							<div class="form-checkbox">
							<label for="round">
									<input type="radio" id="round" name="trip"   onChange="showreturningtime()" >
									<span></span>Round
								</label>
								
								<label for="one-way">
									<input type="radio" id="one-way" name="trip" onChange="delret()" checked="yes/no">
									<span></span>One way
								</label>
								
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
								<span class="form-label " name="from">Flying from</span>
								<i data-mdb-animation-start="onClick" name="from" data-mdb-toggle="animation" data-mdb-animation-reset="true" data-mdb-animation="fade-in-down">

								<select class="form-select" aria-label="Default select example"  name="from">
										<option value="Kathmandu">Kathmandu</option>
										<option value="Pokhara">Pokhara</option>
										<option value="Biratngar">Biratnagar</option>
									</select>
</i>
									<span class="select-arrow"></span>
							
								</div>
							</div>
							<div class="col-md-1">
								<div class="form-group">
								<span class="form-label " name="from"> </span>
								<br>
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z"/>
</svg>
								
<span class="select-arrow"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								<span class="form-label" name="to">Flying to</span>
								<select class="form-select" aria-label="Default select example" name="to">
								<option value="Kathmandu">Kathmandu</option>
										<option value="Pokhara">Pokhara</option>
										<option value="Biratngar">Biratnagar</option>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group" >
									<span class="form-label">Departing</span>
									<input class="form-control" type="date" required name='departure' style="color:black;">
								</div>
							</div>
							<div class=" col-md-3 " id="main" style="margin-left:22px;">
							<span id="demo" class="form-label"></span>

							</div>
</div>
							<div class="col-md-2">
								<div class="form-group" >
									<span class="form-label aria-label="Default select example"">Cabin</span>
									<select class="form-select" aria-label="Default select example">
										<option>Economy</option>
										<option>Business</option>
										<option>First Class</option>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<span class="form-label">Passengers</span>
									<select class="form-select" aria-label="Default select example">

										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
						</div>
						<center>
							<div class="col-md-3">
								<div class="form-btn">
									<button   class="btn btn-secondary btn-lg" name="submit">Show flights</button>
								</div></center>
							</div>
					</form>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row  ">
<div class="col-md-4">
<div class="card" style="width: 20rem;">

  <img src="img/mountain.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Get a beautiful and stunning views of mountains here in Nepal as you fly with us .</p>
  </div></div>
</div>
  <div class="col-md-4">
  <div class="card" style="width: 20rem; ">
  <img src="img/khaja.jpg" class="card-img-top" alt="..." style="height:-20px;">
  <div class="card-body">
    <p class="card-text">Exclusively,Enjoy various Nepali Dishes and Khaja Sets.</p>
  </div>
</div>
</div>
<div class="col-md-4">
  <div class="card" style="width: 20rem; ">
 
  <a  data-bs-toggle="collapse" href="#collapseExample"  aria-expanded="false" aria-controls="collapseExample" style="text-decoration:none;" >
  <img src="img/khaja.jpg" class="card-img-top "  alt="..." style="height:-20px;">
  </a>
<div class="collapse" id="collapseExample">
  
  <div class="card-body">
    <p class="card-text">Exclusively,Enjoy various Nepali Dishes and Khaja Sets.</p>
	
  </div>
</div>
</div>
</div>
</div>
</div>
<?php

include('partials/footer.php');
?>

 
