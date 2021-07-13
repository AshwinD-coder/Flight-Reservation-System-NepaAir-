<?php

include('connection.php');


if(isset($_POST['login1']))

{
    $dec=base64_encode($_POST['password']);

    $query="SELECT * FROM `adminusers` WHERE username='$_POST[username]' AND password='$dec'";
    $result=mysqli_query($conn,$query);

    
  

    if(mysqli_num_rows($result)==1) {
            
      

            session_start();
            $_SESSION['username']=$_POST['username'];
            



           

            header("location: adminindex.php");
        
    }
    else
    {
        echo "<script>alert('Incorrect Password'); </script>";
    }
}


?>





