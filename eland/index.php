<?php
$title = "Electro-Land";
$showHere = "Electro-land";
?>
<html>
<head>
    <title><?= $title?></title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="inc/style.css" />
</head>
<body>
<!--Логотип-->
<div id="header">
    <img src="img/logo.png" width="489" height="85" class="logo" />
</div>
<!--Логотип-->

<!--Корзина-->
<div id="basket"></div>
<!--Корзина-->

<!--Верхнее меню-->
<div id="topmenu">
    <ul>
        <li><a href="http://first/eland/index.php">ГЛАВНАЯ</a></li>
        <li><a href="../php2/eshop/catalog.php">МАГАЗИН</a></li>
        <li><a href="">ДОСТАВКА И ОПЛАТА</a></li>
        <li><a href="../php2/eshop/admin/index.php">ИНФОРМАЦИЯ</a></li>
    </ul>
</div>
<!--Верхнее меню-->



<!--Показываем расположение на сайте (по меню)-->
<div id="showHere">
    <span>Вы находитесь:</span>
    <span><?= $showHere?></span>
</div>
<!--Показываем расположение на сайте (по меню)-->

<!--Блок основного контента-->
<div id="main">
    <br />
    ВСЕМ ПРИВЕТ!!!
    <br /><br />
    ОСНОВНОЙ КОНТЕНТ
    <br /><br />
</div>
<!--Блок основного контента-->

<!--Футер-->
<div id="footer">
   &copy; 05-2015 - <?= date('m-Y')?> Electro-land.dp.ua | Designed by
    <a href="#"> Kpro</a>
</div>
<!--Футер-->

</body>
</html>
