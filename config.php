<?php
define('DB_SERVER', 'db');
define('DB_USERNAME', 'php_docker');
define('DB_PASSWORD', 'password');
define('DB_NAME', 'php_docker');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>