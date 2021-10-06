<?php
session_start();
include("connection.php");
if(isset($_POST['submit1'])){
  
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2=$_POST['confirmpassword'];
	
 
	$email = $_POST['email'];
	
  
    $eid=$_POST['eid-number'];
	$ch="SELECT username FROM adminusers WHERE username='$username'";
	$result=mysqli_query($conn,$ch);
	// if(strlen($password)  < 8){
	// 	echo "<script>alert('Password must be upto 8 characters'); window.location='signup.php'</script>";    
	// 	die;
	// }
if(!is_numeric($username))
		{
			$sql=mysqli_query($conn, "select * from adminusers WHERE username='$username'") or die (mysqli_error("Not conn"));
			$row=mysqli_num_rows($sql);
            $sql2=mysqli_query($conn, "select * from adminusers WHERE EmpID='$eid'") or die (mysqli_error("Not conn"));
			$row2=mysqli_num_rows($sql2);
			if ($row > 0)
			{
				echo " <div class='alert alert-danger'role='alert'>
               Username not available.
              </div>";
			}
			elseif($password != $password2)
			{
				
                echo " <div class='alert alert-danger'role='alert'>
                Incorrect Password.
               </div>";
			}
            elseif($row2==0)
            {
                echo " <div class='alert alert-danger'role='alert'>
                Employee ID Invalid.
               </div>";
            }
			else
			{
				$enc = base64_encode($password);
				$update=mysqli_query($conn, " UPDATE adminusers SET username='$username' WHERE EmpID='$eid' LIMIT 1");
				$update2=mysqli_query($conn, " UPDATE adminusers SET  password='$enc'  WHERE EmpID='$eid' LIMIT 1");
				$update3=mysqli_query($conn, " UPDATE adminusers SET Email='$email'  WHERE EmpID='$eid' LIMIT 1");
				
                
                
                
                if($update && $update2 && $update3 )
               
               

				
				
                echo "<div class='alert alert-success'role='alert'>
               Success.<a href='loginadmin.php'>Click here to login <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-hand-index' viewBox='0 0 16 16'>
               <path d='M6.75 1a.75.75 0 0 1 .75.75V8a.5.5 0 0 0 1 0V5.467l.086-.004c.317-.012.637-.008.816.027.134.027.294.096.448.182.077.042.15.147.15.314V8a.5.5 0 1 0 1 0V6.435a4.9 4.9 0 0 1 .106-.01c.316-.024.584-.01.708.04.118.046.3.207.486.43.081.096.15.19.2.259V8.5a.5.5 0 0 0 1 0v-1h.342a1 1 0 0 1 .995 1.1l-.271 2.715a2.5 2.5 0 0 1-.317.991l-1.395 2.442a.5.5 0 0 1-.434.252H6.035a.5.5 0 0 1-.416-.223l-1.433-2.15a1.5 1.5 0 0 1-.243-.666l-.345-3.105a.5.5 0 0 1 .399-.546L5 8.11V9a.5.5 0 0 0 1 0V1.75A.75.75 0 0 1 6.75 1zM8.5 4.466V1.75a1.75 1.75 0 1 0-3.5 0v5.34l-1.2.24a1.5 1.5 0 0 0-1.196 1.636l.345 3.106a2.5 2.5 0 0 0 .405 1.11l1.433 2.15A1.5 1.5 0 0 0 6.035 16h6.385a1.5 1.5 0 0 0 1.302-.756l1.395-2.441a3.5 3.5 0 0 0 .444-1.389l.271-2.715a2 2 0 0 0-1.99-2.199h-.581a5.114 5.114 0 0 0-.195-.248c-.191-.229-.51-.568-.88-.716-.364-.146-.846-.132-1.158-.108l-.132.012a1.26 1.26 0 0 0-.56-.642 2.632 2.632 0 0 0-.738-.288c-.31-.062-.739-.058-1.05-.046l-.048.002zm2.094 2.025z'ss/>
             </svg></a></a>
               </div>";
               
               
         
			}
		}
		else
		{$_SESSION['value2']=$_usernamenumber;
			echo " <div class='alert alert-danger'role='alert'>Username cannot be a number</div>";
		}}
        ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<a href="loginadmin.php" style="text-decoration:none; color:Blue;"><--Back</a>
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



<style>


body{
    margin: 0;
    font-size: .9rem;
    font-weight: 400;
    line-height: 1.6;
    color: #212529;
    text-align: left;
    background-color: #f5f8fa;
}

.navbar-laravel
{
    box-shadow: 0 2px 4px rgba(0,0,0,.04);
}

.navbar-brand , .nav-link, .my-form, .login-form
{
    font-family: Raleway, sans-serif;
}

.my-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.my-form .row
{
    margin-left: 0;
    margin-right: 0;
}

.login-form
{
    padding-top: 1.5rem;
    padding-bottom: 1.5rem;
}

.login-form .row
{
    margin-left: 0;
    margin-right: 0;
}
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register an Admin</div>
                        <div class="card-body">
                            <form name="my-form"  action="adminsignup.php" method="post">
                             

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" required>
                                    <span  style="margin-left:30px;" id="CheckemailMatch"></span>

                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">User Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control" name="username" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password" style="cursor:pointer;" onclick="myFunction()" title="Show/Hide"></span>

                                    </label>
                                    <div class="col-md-6">
                                        <input type="password" id="pass_word" class="form-control" name="password" required>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="confirmpassword" class="col-md-4 col-form-label text-md-right">Confirm Password
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field_icon toggle-password" style="cursor:pointer;" onclick="myFunction2()" title="Show/Hide"></span>

                                    </label>
                                    <div class="col-md-6">
                                        <input type="password" id="Confirmpassword" class="form-control" name="confirmpassword" required>
        </div>
        
                                    </div>
                                    <div style=" margin-left: 310px;" id="CheckPasswordMatch"></div>
                            
                          
                                <div class="form-group row">
                                    <label for="eid_number" class="col-md-4 col-form-label text-md-right"><abbr
                                                title="Employee Id Card">EID</abbr> Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="eid_number" class="form-control" name="eid-number" required>
                                    </div>
                                </div>
                                    <div class="col-md-6 offset-md-4">
                                        <input style="margin-left:30px; margin-top:30px;" type="submit" name="submit1" class="btn btn-primary">
                                        
                                        </input>
                         </div>
                    </div>
            </div>
        </div>
    </div>                            
                                    </div>
                                </div>
                            </form>
       

</main>

    
<script>
$(document).ready(function () {
   $("#Confirmpassword").on('keyup', function(){
    var password = $("#pass_word").val();
    var confirmPassword = $("#Confirmpassword").val();
   
    if (password != confirmPassword)
        $("#CheckPasswordMatch").html("Password does not match !").css("color","red");
        
    else
        $("#CheckPasswordMatch").html("Password match !").css("color","green");
        

   });
});
$(document).ready(function () {
   $("#email_address").on('keyup', function(){
    var email = $("#email_address").val();
    
    var atposition=email.indexOf("@");  
var dotposition=email.lastIndexOf(".");  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  

        $("#CheckemailMatch").html("Invalid Email!").css("color","red");

   

 }else{
    $("#CheckemailMatch").html("Valid Email!").css("color","green");
 }

        

   });
});

function myFunction() {
  var x = document.getElementById("pass_word");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunction2() {
var y = document.getElementById("Confirmpassword");
  if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }
}

</script>
