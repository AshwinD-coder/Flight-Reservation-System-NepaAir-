
<?php


$query="SELECt * FROM availableflights";

$result = mysqli_query($conn,$query);
//$row = mysqli_fetch_row($result);

date_default_timezone_set("Asia/Kathmandu");
$sDate=date("Y-m-d H:i:s");

$dt=strtotime($sDate);



while(($row = mysqli_fetch_row($result))!=null){

    $a=$row[0];
    $dt2=$row[3].' '.$row[9].':00';
    $dt22=strtotime($dt2);
    if($dt22 <$dt){


        $q="DELETE FROM availableflights WHERE id='$a'";
        mysqli_query($conn,$q);

    }
    
}

