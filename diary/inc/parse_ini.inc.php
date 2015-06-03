<?php
$config = parse_ini_file('config.ini');
/*define("DB_HOST", $config['dbhost']);
define("DB_USER", $config['dbuser']);
define("DB_PASS", $config['dbpass']);
define("DB_BASE", $config['dbbase']);*/
$host = $config['dbhost'];
$user = $config['dbuser'];
$pass = $config['dbpass'];
$base = $config['dbbase'];
?>