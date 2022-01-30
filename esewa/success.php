<?php
include 'setting.php';

$ref = $_GET['refId'];

$data =[
    'amt'=>$actualamount,
    'rid'=> $ref,
    'pid'=>$pid,
    'scd'=> $merchant_code
];

    $curl = curl_init($fraudcheck_url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    echo $response;
 
    curl_close($curl);
    
    if(strpos(  $response, "Success") !== false){
        header("Location: failed.php");
    } else{
         header("Location: https://localhost/fosp/Github/Project5Sem/seat.php");
    }

?>