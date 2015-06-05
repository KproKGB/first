<?php
require_once 'classes/NewDB.class.php';
$con = new newDiary();
$con->dbConnect($host, $user, $pass, $base);
$con->dbCreate();
$con->tableCreate();
$con->dbClose();
?>