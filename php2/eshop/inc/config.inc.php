<?php
define (DB_HOST, "localhost");
define (DB_LOGIN, "root");
define (DB_PASSWORD, "1811");
define (DB_NAME, "eshop");
define (ORDERS_LOG, "orders.log");

$basket = array();
$count = 0;

$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME) or die ("Error:" . mysqli_connect_error());