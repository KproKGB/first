<?php
include "inc/parse_ini.inc.php";
require 'classes/NewDB.class.php';
$con = new newDiary();
$con->dbConnect($host, $user, $pass, $base);
$con->dbCreate();
$con->tableCreate();
$con->dbClose();
?>