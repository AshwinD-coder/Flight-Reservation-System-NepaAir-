
<?php

include('partials/navbar.php');
?>


<link rel="stylesheet" href="partials/style.css" type="">

    <style type="text/css">
    	.hidden{
    		display: none;
    	}

        body{
            color:#57606f ;
            body-background:#57606f;
        }
         a{
    	text-decoration:none;
      color:White;
        }
        a:hover{
    	
      color:#f1f2f6;
        }
    </style>
    
    <form action="log_db_cnt.php" method="POST">

        <div class="container">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                  <div class="card-body">
                    <h5 class="card-title text-center">Log In</h5>
                    <form class="form-signin">
                      <div class="form-label-group">
                        <input type="text" id="user" name="username" class="form-control" placeholder="user name" required autofocus>
                        <label for="inputEmail">User name</label>
                      </div>
        
                      <div class="form-label-group">
                        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                        <label for="inputPassword">Password</label>
                      </div>
        
                      <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Remember password</label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="Login">Sign in</button><br><hr>
                      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit"><a href="signup.php">Sign up as new user</a></button>
                      <hr class="my-4">
                      <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                      <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

</form>
<?php

include('partials/footer.php');
?>

