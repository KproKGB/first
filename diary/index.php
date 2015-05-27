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
    <div id="content">
        <h1><?= $header?></h1>
        <?php include 'inc/routing.inc.php'; ?>
    </div>
    <div id="nav">
        <h2>Навигация по сайту</h2>
        <ul>
            <li><a href="index.php?id=login">Вход</a></li>
            <li><a href="index.php?id=registred">Регистрация</a></li>
            <li><a href="index.php?id=install">Установка БД</a></li>
        </ul>
    </div>
    <div id="footer">
        &copy; Тест сайт, 2014 - <?= date('Y')?>
    </div>
</body>
</html>