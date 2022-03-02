<?php

include('partials/adminnavbar.php');

?>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<?php
include('connection.php');
$f='Fro_m';
$to='T_o';
$d='departur_e';
$t='Departuretime';
$c='cabi_n';
$status='Status';
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
 echo "<table class='table table-hover table-bordered'><tr class='table table-primary'><th>From</th><th>To</th><th>Departure Date</th><th>Departure Time</th><th>Cabin</th><th>Price Per Ticket</th><th>Status</th>";
       
 while(($row = mysqli_fetch_row($result))!=null)
{   
$row[6]=$row[6]-$row[4];

echo "<tr class='table-secondary'>";


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
$date=date('Y-m-d');
echo "</td>";    
echo "<td>" .$row[3]."<a href='edit2.php?id=$id&value=$row[3]&index=$d'><i class='bi bi-pencil'></i></a>";
if($value==$row[3] && $index==$d){echo "<form action='saveedit.php?id=$id&value=$row[3]&index=$d' METHOD='POST'>
    <input min=$date name='from' type='date'  id='departure' placeholder='Select date... required=''>
 <button   class='btn btn-primary btn-md' name='submit'>Update</button>
  
 </form>";

}

echo "</td>"; 

echo "<td>" .$row[9]."<a href='edit2.php?id=$id&value=$row[9]&index=$t'><i class='bi bi-pencil'></i></a>";
if($value==$row[9] && $index==$t){echo "<form action='saveedit.php?id=$id&value=$row[9]&index=$t' METHOD='POST'>
    <input  name='from' type='time'  id='departure' placeholder='Select time.... required=''>
 <button   class='btn btn-primary btn-md' name='submit'>Update</button>
  
 </form>";

}

echo "</td>"; 
echo "<td>" .$row[5]."<a href='edit2.php?id=$id&value=$row[5]&index=$c'><i class='bi bi-pencil'></i></a>" ;
if($value==$row[5] && $index==$c){echo "<form action='saveedit.php?id=$id&value=$row[5]&index=$c' METHOD='POST'>
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
echo "<td>" .$row[8]."<a href='edit2.php?id=$id&value=$row[8]&index=$p'><i class='bi bi-pencil'></i></a>";
if($value==$row[8]){echo "<form action='saveedit.php?id=$id&value=$row[8]&index=$p' METHOD='POST'>
    <select required name='from' >
    <option value=''>Select Price/Ticket...</option>
    <option value='2000'>Rs.2000</option>
    <option value='4000'>Rs.4000</option>
    <option value='6000'>Rs.6000</option>
    <option value='10000'>Rs.10000</option>

    
    </select>
 <button   class='btn btn-primary btn-md' name='submit'>Update</button>

    </form>";

}
echo "</td>"; 
echo "<td>" .$row[7]."<a href='edit2.php?id=$id&value=$row[7]&index=$status'><i class='bi bi-pencil'></i></a>";
if($value==$row[7]){echo "<form action='saveedit.php?id=$id&value=$row[7]&index=$status' METHOD='POST'>
    <select required name='from' >
    <option value=''>Select status</option>
    <option value=' '>empty</option>
    <option value='Booking in Progress'>Booking in Progress</option>
    <option value='Departed'>Departed</option>
    

    
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

    

