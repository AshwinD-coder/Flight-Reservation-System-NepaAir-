<?php

include('partials/navbar.php');

?>

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

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register an Admin</div>
                        <div class="card-body">
                            <form name="my-form"  action="adminlogin_db_cnt.php" method="post">
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="full-name" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="email_address" class="form-control" name="email" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="user_name" class="col-md-4 col-form-label text-md-right">User Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="user_name" class="form-control" name="username" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="pass_word" class="form-control" name="password" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="confirmpassword" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input type="password" id="Confirmpassword" class="form-control" name="confirmpassword" required>
        </div>
        
                                    </div>
                                    <div style=" margin-left: 310px;" id="CheckPasswordMatch"></div>
                            
                          
                                <div class="form-group row">
                                    <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>
                                    <div class="col-md-6">
                                        <input type="tel" id="phone_number" class="form-control" name="phone" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="present_address" class="col-md-4 col-form-label text-md-right">Present Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="present_address" class="form-control" name="presentaddress" required>
                                    </div>
                                </div>
<div class="form-group row">
                                    <label for="p_address" class="col-md-4 col-form-label text-md-right">Permanent Address</label>
                                    <div class="col-md-6">
                                        <input type="text" id="p_address" class="form-control" name="p_address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nid_number" class="col-md-4 col-form-label text-md-right"><abbr
                                                title="National Id Card">NID</abbr> Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="nid_number" class="form-control" name="nid-number">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="eid_number" class="col-md-4 col-form-label text-md-right"><abbr
                                                title="Employee Id Card">EID</abbr> Number</label>
                                    <div class="col-md-6">
                                        <input type="text" id="eid_number" class="form-control" name="eid-number">
                                    </div>
                                </div>
                                    <div class="col-md-6 offset-md-4">
                                        <input type="submit" name="submit" class="btn btn-primary">
                                        
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

            <?php

include('partials/footer.php');

?>
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
</script>
