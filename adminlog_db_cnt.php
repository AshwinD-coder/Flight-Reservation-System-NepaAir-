<?php

include('connection.php');



if(isset($_POST['Login']))


{ echo"hello";
    $dec=base64_encode($_POST['password']);
    $nam=$_POST['adminname'];
    


    $query="SELECT * FROM `adminusers` WHERE username='$nam' AND password='$dec'";
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
