<?php
$currency = '&#8377; '; //Currency Character or code

$db_username = 'root';
$db_password = 'password';
$db_name = 'grocery';
$db_host = 'localhost';

$shipping_cost      = 50; //shipping cost
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
?>