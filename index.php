

<?php

include('partials/navbar.php');

?>



<link rel="stylesheet" href="partials/style.css" type="">
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
									<input type="radio" id="round" name="trip">
									<span></span>Round
								</label>
								
								<label for="one-way">
									<input type="radio" id="one-way" name="trip">
									<span></span>One way
								</label>
								
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<span class="form-label">Flying from</span>
									<input class="form-control" type="select" placeholder="City or airport" name='from'>
							
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<span class="form-label">Flyning to</span>
									<input class="form-control" type="text" placeholder="City or airport" name='to'>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<span class="form-label">Departing</span>
									<input class="form-control" type="date" required name='departure'>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<span class="form-label">Returning</span>
									<input class="form-control" type="date" required name='return'>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<span class="form-label">Adults (18+)</span>
									<select class="form-control">
										<option>1</option>
										<option>2</option>
										<option>3</option>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<span class="form-label">Children (0-17)</span>
									<select class="form-control">
										<option>0</option>
										<option>1</option>
										<option>2</option>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<span class="form-label">Travel class</span>
									<select class="form-control">
										<option>Economy </option>
										<option>Business </option>
										<option>First </option>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-btn">
									<button class="submit-btn" name="submit">Show flights</button>
								</div>
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

