<?php
define('DB_HOST', 'localhost');
define('DB_USR', 'root');
define('DB_PASS', '');
define('DB_NAM', 'mysite');

$link = mysqli_connect(DB_HOST, DB_USR, DB_PASS, DB_NAM);
if(!$link)
    echo 'Ошибка соединения: '. mysqli_connect_errno();
include 'loginForm.html';

?>