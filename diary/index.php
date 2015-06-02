<?php
include 'inc/headers.inc.php';
?>

<html>
<head>
    <title><?= $title?></title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="inc/style.css">
</head>
    <body>
        <?php include 'inc/routing.inc.php'; ?>
        <?php include 'inc/startpage.php';?>
    <div id="footer">
        &copy; Тест сайт, 2014 - <?= date('Y')?>
    </div>
</body>
</html>