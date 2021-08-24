<?php 

// Change Info From Here

//
$epay_url = "https://uat.esewa.com.np/epay/main";
$pid = mt_rand();
$successurl = "https://localhost/fosp/Github/Project5Sem/esewa/success.php?q=su";
$failedurl = "https://localhost/fosp/Github/Project5Sem/esewa/failed.php?q=fu";
$merchant_code = "epay_payment"; 
$fraudcheck_url = "https://uat.esewa.com.np/epay/transrec";

// For Amount Check
$actualamount = 1000;

?>