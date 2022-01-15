
<?php

include('partials/navbar.php');
include('partials/delectflight.php');

?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="partials/style.css?<?php echo time(); ?>" type="">
<head>
<script src="
https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
</script>
<script>
function getSelect(select1){
	if(select1!='')
	{
		$("#select2 option[value='"+select1+"']").hide();
		$("#select2 option[value!='"+select1+"']").show();

	}
}
function getSelect2(select1){
	if(select1!='')
	{
		$("#select1 option[value='"+select1+"']").hide();
		$("#select1 option[value!='"+select1+"']").show();

	}
}



	// document.getELementById("demo").innerHTML="Returning";
	function noop(){
		
	};
function showreturningtime() {
	var check=document.getElementById("round").value;

  var x = document.createElement("INPUT");

  x.setAttribute("type"  , "date");
  x.setAttribute("min"  , "<?php echo date('Y-m-d');?>");
   
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





</script></head>
<link rel="stylesheet" href="partials/footer.css ?<?php echo time(); ?>" />
<div>
	<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
		<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="img/carousel1.jpg" class="d-block w-100" alt="..." height="300px">
		  </div>
		  <div class="carousel-item">
			<img src="img/carousel3.jpg" class="d-block w-100" alt="..." height="300px">
		  </div>
		  <div class="carousel-item">
			<img src="img/carousel2.jpg" class="d-block w-100" alt="..." height="300px">
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
							<!-- <div class="form-checkbox">
							<label for="round">
									<input type="radio" id="round" name="trip"   onChange="showreturningtime()" >
									<span></span>Round
								</label>
								
								<label for="one-way">
									<input type="radio" id="one-way" name="trip" onChange="delret()" checked="yes/no">
									<span></span>One way
								</label>
								
							</div>
						</div> -->
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
								<span class="form-label " name="from2">Flying from</span>

								<select class="form-select"   name="from" required data-placeholder="destination" id="select1" onChange="getSelect(this.value);">
								<option value="">Select your destination</option>
										<option value="Kathmandu">Kathmandu</option>
										<option value="Pokhara">Pokhara</option>
										<option value="Biratnagar">Biratnagar</option>
										<option value='Bhairahawa'>Bhairahawa</option>
                                    <option value='Birgunj'>Birgunj</option>
                                    <option value='Lukla'>Lukla</option>
                                    <option value='Taplejung'>Taplejung</option>
                                    <option value='Nepalgunj'>Nepalgunj</option>
                                    <option value='Chitwan'>Chitwan</option>
                                    <option value='Jomsom '>Jomsom</option>
								</select>
								
</i>
									
							
								</div>
							</div>
							<div class="col-md-1">
								<div class="form-group">
								<div class="form-label"></div>
								<br>
								
								
								<i class="bi bi-arrow-right"></i>

								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
								<span class="form-label" name="to1" >Flying to</span>
								<select class="form-select" aria-label="Default select example" name="to" required id="select2" onChange="getSelect2(this.value);">
								<option value="">Select your destination</option>
								<option value="Kathmandu">Kathmandu</option>
								<option value="Pokhara">Pokhara</option>
								<option value="Biratnagar">Biratnagar</option>
								<option value='Bhairahawa'>Bhairahawa</option>
                                    <option value='Birgunj'>Birgunj</option>
                                    <option value='Lukla'>Lukla</option>
                                    <option value='Taplejung'>Taplejung</option>
                                    <option value='Nepalgunj'>Nepalgunj</option>
                                    <option value='Chitwan'>Chitwan</option>
                                    <option value='Jomsom '>Jomsom</option>
								</select>
									
								</div>
							</div>
							
						<div class="row">
							<div class="col-md-3">
								<div class="form-group" >
									<span class="form-label">Departing</span>
									<input class="form-control" min="<?php echo date('Y-m-d');?>" type="date" required name='departure' style="color:black;">
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
										<option>Premium Economy</option>
										<option>Business</option>
										<option>First Class</option>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
							<div class="col-md-2">
								<div class="form-group">
									<span class="form-label">Passengers</span>
									<select class="form-select" aria-label="Default select example" name="guests">

										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
						</div>
						<center>
							<div class="col-md-3">
								<div class="form-btn">
									<button   class="btn btn-success btn-lg" name="submit"><span style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Show flights</span></button>
								</div></center>
							</div>
					</form>
</div>
</div>
</div>
</div>
</div>
<!-- <div class="container">
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
</div> -->
</div>
<?php

include('partials/footer.php');
?>

 
