<?php
$config = parse_ini_file('config.ini');
$host = $config['dbhost'];
$user = $config['dbuser'];
$pass = $config['dbpass'];
$base = $config['dbbase'];

require 'classes/NewDB.class.php';
$con = new newDiary();
$con->dbConnect($host, $user, $pass, $base);
$con->dbCreate();
$con->tableCreate();
$con->dbClose();
?>