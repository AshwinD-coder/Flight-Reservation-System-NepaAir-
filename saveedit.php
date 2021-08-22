
<?php 
  session_start();
  include("connection.php");
  $value=$_GET['value'];
 $id=$_GET['id'];
 $index=$_GET['index'];


if(isset($_POST['submit'])){
$update=$_POST['from'];
mysqli_query($conn, "UPDATE availableflights SET $index='$update' WHERE id='$id' && $index='$value'");
               
			    echo "<script> window.location='edit2.php?id=$id&value=$value&index=$index';</script>";
}
else{
    echo "<script>alert('Error Updating'); window.location='adminindex.php'</script>";
}
?>




                    