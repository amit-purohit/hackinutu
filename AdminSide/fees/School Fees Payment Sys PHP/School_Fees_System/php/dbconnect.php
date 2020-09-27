<?php
//error_reporting(0);

session_start();


//DEFINE("BASE_URL","http://cipetbhopal.com/");
// DEFINE("BASE_URL","http://localhost/rainbow/");

DEFINE ('DB_USER', 'root');
DEFINE ('DB_PSWD', ''); 
DEFINE ('DB_HOST', 'localhost'); 
DEFINE ('DB_NAME', 'bcastuffs'); 

// date_default_timezone_set('Asia/Calcutta'); 
$con = mysqli_connect("localhost", "root", "", "bcastuffs");

if (!$con) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;

}
?>