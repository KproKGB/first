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
<div id="body">

    <!--Корзина-->
    <div id="basket">КОРЗИНА</div>
    <!--Корзина-->


    <!--Логотип-->
    <div id="header">
        <img src="img/logo.png" width="489" height="85" class="logo" />
    </div>
    <!--Логотип-->


    <!--Верхнее меню-->
    <div id="topmenu">
        <ul>
            <li><a href="http://first/eland/index.php">ГЛАВНАЯ</a></li>
            <li><a href="../php2/eshop/catalog.php">МАГАЗИН</a></li>
            <li><a href="/eland">ДОСТАВКА И ОПЛАТА</a></li>
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


    <!--Правое меню-->
    <div id="right_menu">
        <ul>
            <li>Меню 1
                <ul>
                    <li>Подменю1.1</li>
                    <li>Подменю1.2</li>
                    <li>Подменю1.3</li>
                    <li>Подменю1.4</li>
                </ul>
            </li>
            <li>Меню 2
                <ul>
                    <li>Подменю2.1</li>
                    <li>Подменю2.2</li>
                    <li>Подменю2.3</li>
                    <li>Подменю2.4</li>
                </ul>
            </li>
            <li>Меню 3
                <ul>
                    <li>Подменю3.1</li>
                    <li>Подменю3.2</li>
                    <li>Подменю3.3</li>
                    <li>Подменю3.4</li>
                </ul>
            </li>
            <li>Меню 4
                <ul>
                    <li>Подменю4.1</li>
                    <li>Подменю4.2</li>
                    <li>Подменю4.3</li>
                    <li>Подменю4.4</li>
                </ul>
            </li>
        </ul>

    </div>
    <!--Правое меню-->


    <!--Блок основного контента-->
    <div id="main">
        <br />
        ВСЕМ ПРИВЕТ!!!
        <br /><br />
        ОСНОВНОЙ КОНТЕНТ
        <br /><br />
    </div>
    <!--Блок основного контента-->

</div>

    <!--Футер-->
    <div id="footer">
       &copy; 05-2015 - <?= date('m-Y')?> Electro-land.dp.ua | Designed by <a href="#"> Kpro</a>
    </div>
    <!--Футер-->


</body>
</html>
