<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "ecup";

$objCon = mysqli_connect($serverName,$username,$password,$dbName);
mysqli_set_charset($objCon,"utf8");
define('SITE_URL', 'http://www.e-cup.ml/osmpoll/register/');

?>