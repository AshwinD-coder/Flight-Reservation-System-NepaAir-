
<?php
include('connection.php');
session_start();
$id=$_SESSION['id'];
$result="DELETE FROM availableflights WHERE id='$id'";
if(mysqli_query($conn,$result))
//success
echo "<script>alert('Deleted From Database');window.location='adminindex.php'</script>";
else
//error
echo "mysqli_error()";
?>