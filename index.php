<?php
include 'inc/headers.inc.php';
define ('PATH_LOG', 'path.log');
include 'inc/log.inc.php';
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
			<?php
				include 'inc/routing.inc.php';
			?>
		</div>
        <div id="nav">
            <h2>Навигация по сайту</h2>
            <ul>
                <li><a href="index.php">Домой</a> </li>
                <li><a href="index.php?id=gen">Генератор паролей</a></li>
                <li><a href="/php2">PHP Уровень 2</a></li>
                <li><a href="/php3">PHP Уровень 3</a></li>
                <li><a href="/php4">PHP Уровень 4</a></li>
                <li><a href="/mvc">MVC</a></li>
                <li><a href="/diary">Online Diary</a></li>
                <li><a href="adminer.php">SQL manager</a></li>
                <li><a href="index.php?id=cookie">Cookie</a></li>
                <li><a href="index.php?id=session">Session</a></li>
                <li><a href="index.php?id=test">Пройти тест</a></li>
                <li><a href="index.php?id=calc">Калькулятор</a></li>
                <li><a href="index.php?id=log">Журнал переходов</a></li>
                <li><a href="index.php?id=gbook">Гостевая книга</a></li>
            </ul>
        </div>
        <div id="footer">
            &copy; Тест сайт, 2014 - <?= date('Y')?>
        </div>
    </body>
</html>