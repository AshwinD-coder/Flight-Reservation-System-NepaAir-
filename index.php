<?php

include('partials/navbar.php');

?>
<script>
	function noop(){
		
	};
function showreturningtime() {
	var check=document.getElementById("round").value;

  var x = document.createElement("INPUT");
  var y = document.createElement("SPAN");
  x.setAttribute("type"  , "date");
  y.setAttribute("class" , "form-label"); 
  x.setAttribute("class" , "form-control");
  x.setAttribute("name"  , "return");
  document.getElementById("main").appendChild(y);
  document.getElementById("main").appendChild(x);
  


}

function delret(){
	var myobj =document.getElementById("main");
	myobj.removeChild(myobj.lastElementChild);
	myobj.removeChild(myobj.lastElementChild);

}
</script>
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
</div><br><br>





<div id="booking" class="section">
	<div class="section-center">
		<div class="container">
			<div class="row">
				<div class="booking-form">
					<form action="searchflights.php" method="POST">
						<div class="form-group">
							<div class="form-checkbox">
							<label for="round">
									<input type="radio" id="round" name="trip"   onChange="showreturningtime()" >
									<span></span>Round
								</label>
								
								<label for="one-way">
									<input type="radio" id="one-way" name="trip" onChange="delret()">
									<span></span>One way
								</label>
								
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
								<span class="form-label " name="from">Flying from</span>
								<select class="form-select" aria-label="Default select example"  name="from">
										<option value="Kathmandu">Kathmandu</option>
										<option value="Pokhara">Pokhara</option>
										<option value="Biratngar">Biratnagar</option>
									</select>
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
									<input class="form-control" type="date" required name='departure'>
								</div>
							</div>
							<div class=" col-md-3 " id="main">
								
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
									<button class="submit-btn" name="submit">Show flights</button>
								</div></center>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php

include('partials/footer.php');
?>

