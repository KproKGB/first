<?php
$config = parse_ini_file('config.ini');
define("DB_HOST", $config['dbhost']);
define("DB_USER", $config['dbuser']);
define("DB_PASS", $config['dbpass']);
define("DB_BASE", $config['dbbase']);

function __autoload($class_name) {
    require_once 'classes/'.$class_name.'.class.php';
}

if (isset($_GET['id'])) {
    $id = strtolower(strip_tags(trim($_GET['id'])));
}