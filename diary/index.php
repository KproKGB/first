<?php
header('Content-Type: text/html; charset=utf-8');
require 'classes/start.inc.php';
$con = new newDiary();
$con->dbConnect();
$con->dbCreate();
include 'classes/loginForm.html';
?>