<?php
$title = "Electro-Land - Главная";
$showHere = "Electro-land";
?>
<html>
<head>
    <title><?= $title?></title>
    <meta charset=utf-8" />
    <link rel="stylesheet" href="inc/style.css" />
</head>
<body>
<div id="header">
    <img src="img/logo.png" width="489" height="85" alt="Наш логотип" class="logo" />
</div>

<div id="topmenu">
    <ul>
        <li><a href="">ГЛАВНАЯ</a></li>
        <li><a href="">МАГАЗИН</a></li>
        <li><a href="">ДОСТАВКА И ОПЛАТА</a></li>
        <li><a href="">ИНФОРМАЦИЯ</a></li>
    </ul>
</div>
<div id="showHere">
    <span>Вы здесь:</span>
    <span><?= $showHere?></span>
</div>
<div id="main">

</div>

<div id="footer">
   &copy; 11-2013 - <?= date('m-Y')?> Electro-land.dp.ua | Designed by
    <a href="/"> Kpro</a>
</div>

</body>
</html>
