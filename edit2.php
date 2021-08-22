<?php

include('partials/adminnavbar.php');

?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<?php
include('connection.php');
$f='Fro_m';
$to='T_o';
$d='departur_e';
$r='retur_n';
$c='cabi_n';
$t='tri_p';
$p='priceperticket';
if(isset($_GET['value']))
{
    $value=$_GET['value'];
    $index=$_GET['index'];
    
}

if(isset($_GET['id']))
{
 $id=$_GET['id']; 
 $query="SELECT * FROM availableflights WHERE id='$id'";
 $result=mysqli_query($conn,$query);
 echo "<h1><center>Edit Flight Info</h1></center>";
 echo "<table class='table table-hover table-bordered'><tr class='table table-primary'><th>From</th><th>To</th><th>Departure Date</th><th>Return Date</th><th>Cabin</th><th>Seats available</th><th>Trip Type</th><th>Price Per Ticket</th>";
       
 while(($row = mysqli_fetch_row($result))!=null)
{   
$row[8]=$row[8]-$row[5];

echo "<tr class='table table-secondary'>";


echo "<td>" .$row[1]."<a href='edit2.php?id=$id&value=$row[1]&index=$f'><i class='bi bi-pencil'></i></a>";
if($value==$row[1]  && $index==$f){echo "<form action='saveedit.php?id=$id&value=$row[1]&index=$f' METHOD='POST'>
    <select required name='from'>
        <option value=''>Select a location...</option>
        <option value='Kathmandu'>Kathmandu</option>
        <option value='Pokhara'>Pokhara</option>
        <option value='Bhairahawa'>Bhairahawa</option>
        <option value='Biratnagar'>Biratnagar</option>
        <option value='Birgunj'>Birgunj</option>
        <option value='Lukla'>Lukla</option>
        <option value='Taplejung'>Taplejung</option>
        <option value='Nepalgunj'>Nepalgunj</option>
        <option value='Chitwan'>Chitwan</option>
        <option value='Jomsom '>Jomsom</option>
    </select>
 <button   class='btn btn-primary btn-md' name='submit'>Update</button>

 </form>";

}
echo "</td>";
echo "<td>" .$row[2]."<a href='edit2.php?id=$id&value=$row[2]&index=$to'><i class='bi bi-pencil'></i></a>";
if($value==$row[2]  && $index==$to){echo "<form  action='saveedit.php?id=$id&value=$row[2]&index=$to' METHOD='POST'>
    <select required name='from'>
        <option value=''>Select a location...</option>
        <option value='Kathmandu'>Kathmandu</option>
        <option value='Pokhara'>Pokhara</option>
        <option value='Bhairahawa'>Bhairahawa</option>
        <option value='Biratnagar'>Biratnagar</option>
        <option value='Birgunj'>Birgunj</option>
        <option value='Lukla'>Lukla</option>
        <option value='Taplejung'>Taplejung</option>
        <option value='Nepalgunj'>Nepalgunj</option>
        <option value='Chitwan'>Chitwan</option>
        <option value='Jomsom '>Jomsom</option>
    </select>
 <button   class='btn btn-primary btn-md' name='submit'>Update</button>

 </form>";

}
echo "</td>";    
echo "<td>" .$row[3]."<a href='edit2.php?id=$id&value=$row[3]&index=$d'><i class='bi bi-pencil'></i></a>";
if($value==$row[3] && $index==$d){echo "<form action='saveedit.php?id=$id&value=$row[3]&index=$d' METHOD='POST'>
    <input name='from' type='date'  id='departure' placeholder='Select date... required=''>
 <button   class='btn btn-primary btn-md' name='submit'>Update</button>
  
 </form>";

}
echo "</td>";
echo "<td>" .$row[4]."<a href='edit2.php?id=$id&value=$row[4]&index=$r'><i class='bi bi-pencil'></i></a>" ;
if($value==$row[4] && $index==$r){echo "<form action='saveedit.php?id=$id&value=$row[4]&index=$r' METHOD='POST'>
    <input name='from' type='date'  id='departure' placeholder='Select date... required=''>
 <button   class='btn btn-primary btn-md' name='submit'>Update</button>
    
 </form>";
}
echo "</td>"; 
echo "<td>" .$row[6]."<a href='edit2.php?id=$id&value=$row[6]&index=$c'><i class='bi bi-pencil'></i></a>" ;
if($value==$row[6] && $index==$c){echo "<form action='saveedit.php?id=$id&value=$row[6]&index=$c' METHOD='POST'>
    <select required name='from' >
    <option value=''>Select Cabin...</option>
    <option value='Economy'>Economy</option>
    <option value='Premium Economy'>Premium Economy</option>
    <option value='Business'>Business</option>
    <option value='First Class'>First Class</option>
    </select>
 <button   class='btn btn-primary btn-md' name='submit'>Update</button>
 </form>";
}
echo "</td>"; 
echo "<td>" .$row[8]."</td>";
echo "<td>" .$row[7]."<a href='edit2.php?id=$id&value=$row[7]&index=$t'><i class='bi bi-pencil'></i></a>"  ;
if($value==$row[7]){echo "<form action='saveedit.php?id=$id&value=$row[7]&index=$t' METHOD='POST'>
    <select required name='from' >
    <option value=''>Select Trip-Type...</option>
    <option value='Round'>Round</option>
    <option value='One-Way'>One-Way</option>
    </select>
 <button   class='btn btn-primary btn-md' name='submit'>Update</button>
 </form>";

}
echo "</td>"; 
echo "<td>" .$row[10]."<a href='edit2.php?id=$id&value=$row[10]&index=$p'><i class='bi bi-pencil'></i></a>";
if($value==$row[10]){echo "<form action='saveedit.php?id=$id&value=$row[10]&index=$p' METHOD='POST'>
    <select required name='from' >
    <option value=''>Select Price/Ticket...</option>
    <option value='Rs.2000'>Rs.2000</option>
    <option value='Rs.4000'>Rs.4000</option>
    <option value='Rs.6000'>Rs.6000</option>
    <option value='Rs.10000'>Rs.10000</option>

    
    </select>
 <button   class='btn btn-primary btn-md' name='submit'>Update</button>

    </form>";

}
echo "</td>"; 
echo "</tr>";
}
echo "</table>";
    echo "<br>";
}  

else
{
    die('Something went wrong.');
}

?>

    

