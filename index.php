<?php
define ('PATH_LOG', 'path.log');
include 'inc/log.inc.php';
include 'inc/routing.inc.php';
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Main</title>
</head>
<body>
<a href="cookie/index.php">Cookie</a><br>
<a href="session/index.php">Session</a><br>
<a href="test/index.php">Test</a><br>
<a href="gen.php">Генератор паролей</a><br>
<a href="index.php?id=log">Log</a><br>
</body>
</html>
