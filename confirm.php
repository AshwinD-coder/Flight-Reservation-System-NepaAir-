<?php
$id=$_GET['id'];
session_start();
$_SESSION['id']=$id;
echo"
<script>
var confirm=confirm('Are you sure about that?');
if(confirm==true)
{
   window.location='delete.php';
}
else
{
 alert('Deletion Aborted!');  window.location='adminindex.php';  
}
</script>";
?>