<?php

include('connection.php');


if(isset($_POST['Login']))

{
    $dec=base64_encode($_POST['password']);

    $query="SELECT * FROM `users` WHERE username='$_POST[username]' AND password='$dec'";
    $result=mysqli_query($conn,$query);

    
            

    if(mysqli_num_rows($result)==1) {
            
      

            session_start();
            $_SESSION['username']=$_POST['username'];
            



           

            header("location: index.php");
        
    }
    else
    {
        echo "<script>alert('Incorrect Password'); </script>";
    }
}


?>
