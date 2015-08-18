<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define ('DB_HOST', 'localhost');
define ('DB_LOGIN', 'root');
define ('DB_PASSWORD', '1811');
define ('DB_NAME', 'eshop');
define ('ORDERS_LOG', 'orders.log');

$basket = array();
$count = 0;

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die ("Error:" . mysqli_connect_error());

basketInit();