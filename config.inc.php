<?php
$db_username        = 'root'; //MySql database username
$db_password        = ''; //MySql dataabse password
$db_name            = 'test'; //MySql database name
$db_host            = 'localhost'; //MySql hostname or IP

$currency			= 'RM'; //currency symbol
$shipping_cost		= 0; //shipping cost
$taxes				= array( //List your Taxes percent here.
							 
							'Goods and Service Tax' => 6,
							'Delivery Fee' => 40
							);

$mysqli_conn = new mysqli($db_host, $db_username, $db_password,$db_name); //connect to MySql
if ($mysqli_conn->connect_error) {//Output any connection error
    die('Error : ('. $mysqli_conn->connect_errno .') '. $mysqli_conn->connect_error);
}