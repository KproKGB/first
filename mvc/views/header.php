<?php Session::init();
Cart::basketInit();
/*$basket = array();*/
Cart::$count = 0;
?>
<html>
<head>
    <title>Electro-Land</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="<?= URL?>/public/css/style.css" />
    <link rel="stylesheet" href="<?= URL?>/public/css/main.css" />
    <link rel="stylesheet" href="<?= URL?>/public/css/basket.css" />
    <link rel="stylesheet" href="<?= URL?>/public/css/topmenu.css" />
    <link rel="stylesheet" href="<?= URL?>/public/css/rmenu.css" />
    <link rel="stylesheet" href="<?= URL?>/public/css/footer.css" />
    <script src="<?= URL?>/public/js/jquery-1.11.3.js"></script>
    <script src="<?= URL?>/public/js/custom.js"></script>
</head>
<body>
<div class="body">

    <!--Корзина-->
    <div class="basket" onmouseover="showBasket()" onmouseout="hideBasket()">
        <a href="<?= URL?>/basket" ><div class="basket_order"><?= Cart::$count?> ед.</div>
        <div class="basket_arr"></div></a>
        <div class="basket_empty" id="basket_empty"></div>
    </div>
    <!--Корзина-->

    <!--Логотип-->
    <div class="header">
        <a href="<?= URL?>/index"><img src="<?= URL?>/public/img/logo.png" width="489" height="85" class="logo" /></a>
    </div>
    <!--Логотип-->

    <!--Верхнее меню-->
    <div class="topmenu">
        <ul>
            <?php if(Session::get('loggedIn') == false): ?>
            <li><a href="<?= URL?>/index">ГЛАВНАЯ</a></li>
            <li><a href="<?= URL?>/catalog">МАГАЗИН</a></li>
            <li><a href="<?= URL?>/help">ДОСТАВКА И ОПЛАТА</a></li>
            <?php endif; ?>

            <?php if(Session::get('loggedIn') == true):?>
                <li><a href="<?= URL ?>/dashboard">ЛИЧНЫЙ КАБИНЕТ</a></li>

                <?php if(Session::get('role') == 'admin'):?>
                    <li><a href="<?php echo URL; ?>/user">ПОЛЬЗОВАТЕЛИ</a></li>
                    <li><a href="<?php echo URL; ?>/admin">АДМИНКА МАГАЗИНА</a></li>
                <?php endif; ?>

                <li><a href="<?= URL ?>/dashboard/logout">ВЫЙТИ</a></li>
            <?php else: ?>
                <li><a href="<?= URL?>/login">ВОЙТИ</a></li>
            <?php endif; ?>
        </ul>
    </div>
    <!--Верхнее меню-->

    <!--Показываем расположение на сайте (по меню)-->
    <div class="showHere">
        <span>Вы находитесь:</span>
        <span><a href='<?= URL?>/index'>Electro-land</a><img src="<?= URL?>/public/img/arrow.png"><a href='<?= URL?>/catalog'>Shop<a></span>
    </div>
    <!--Показываем расположение на сайте (по меню)-->

    <!--Правое меню-->
    <div id="right_menu" class="right_menu">
        <div class="rm_top">
            <img src="<?= URL?>/public/img/tree/base.png">
            <a href="">Магазин</a>
        </div>

        <div class="rm_tree">
            <img src="<?= URL?>/public/img/tree/minus.gif">
            <img src="<?= URL?>/public/img/tree/imgfolder.png">
            <a href="">Меню 1</a>


            <div class="rm_tree_sub">
                <img src="<?= URL?>/public/img/tree/line.gif">
                <img src="<?= URL?>/public/img/tree/join.gif">
                <img src="<?= URL?>/public/img/tree/folder.png">
                <a href="">Подменю 1.1</a>
            </div>
            <div class="rm_tree_sub">
                <img src="<?= URL?>/public/img/tree/line.gif">
                <img src="<?= URL?>/public/img/tree/join.gif">
                <img src="<?= URL?>/public/img/tree/folder.png">
                <a href="">Подменю 1.2</a>
            </div>
            <div class="rm_tree_sub">
                <img src="<?= URL?>/public/img/tree/line.gif">
                <img src="<?= URL?>/public/img/tree/joinbottom.gif">
                <img src="<?= URL?>/public/img/tree/folder.png">
                <a href="">Подменю 1.3</a>
            </div>
        </div>
        <div class="rm_tree">
            <img src="<?= URL?>/public/img/tree/minus.gif">
            <img src="<?= URL?>/public/img/tree/imgfolder.png">
            <a href="">Меню 2</a>

            <div class="rm_tree_sub">
                <img src="<?= URL?>/public/img/tree/line.gif">
                <img src="<?= URL?>/public/img/tree/join.gif">
                <img src="<?= URL?>/public/img/tree/folder.png">
                <a href="">Подменю 2.1</a>
            </div>
            <div class="rm_tree_sub">
                <img src="<?= URL?>/public/img/tree/line.gif">
                <img src="<?= URL?>/public/img/tree/join.gif">
                <img src="<?= URL?>/public/img/tree/folder.png">
                <a href="">Подменю 2.2</a>
            </div>
            <div class="rm_tree_sub">
                <img src="<?= URL?>/public/img/tree/line.gif">
                <img src="<?= URL?>/public/img/tree/joinbottom.gif">
                <img src="<?= URL?>/public/img/tree/folder.png">
                <a href="">Подменю 2.3</a>
            </div>
        </div>

        <div class="rm_tree">
            <img src="<?= URL?>/public/img/tree/minus.gif">
            <img src="<?= URL?>/public/img/tree/imgfolder.png">
            <a href="">Меню 3</a>


            <div class="rm_tree_sub">
                <img src="<?= URL?>/public/img/tree/line.gif">
                <img src="<?= URL?>/public/img/tree/join.gif">
                <img src="<?= URL?>/public/img/tree/folder.png">
                <a href="">Подменю 3.1</a>
            </div>
            <div class="rm_tree_sub">
                <img src="<?= URL?>/public/img/tree/line.gif">
                <img src="<?= URL?>/public/img/tree/join.gif">
                <img src="<?= URL?>/public/img/tree/folder.png">
                <a href="">Подменю 3.2</a>
            </div>
            <div class="rm_tree_sub">
                <img src="<?= URL?>/public/img/tree/line.gif">
                <img src="<?= URL?>/public/img/tree/joinbottom.gif">
                <img src="<?= URL?>/public/img/tree/folder.png">
                <a href="">Подменю 3.3</a>
            </div>
        </div>

        <div class="rm_tree">
            <img src="<?= URL?>/public/img/tree/plus.gif">
            <img src="<?= URL?>/public/img/tree/folder.png">
            <a href="">Меню 4</a>
        </div>
        <div class="rm_tree">
            <img src="<?= URL?>/public/img/tree/plus.gif">
            <img src="<?= URL?>/public/img/tree/folder.png">
            <a href="">Меню 5</a>
        </div>
        <div class="rm_tree">
            <img src="<?= URL?>/public/img/tree/plus.gif">
            <img src="<?= URL?>/public/img/tree/folder.png">
            <a href="">Меню 6</a>
        </div>
        <div class="rm_tree">
            <img src="<?= URL?>/public/img/tree/minusbottom.gif">
            <img src="<?= URL?>/public/img/tree/imgfolder.png">
            <a href="">Меню 7</a>

            <div class="rm_tree_sub">
                <img src="<?= URL?>/public/img/tree/empty.gif">
                <img src="<?= URL?>/public/img/tree/join.gif">
                <img src="<?= URL?>/public/img/tree/folder.png">
                <a href="">Подменю 7.1</a>
            </div>
            <div class="rm_tree_sub">
                <img src="<?= URL?>/public/img/tree/empty.gif">
                <img src="<?= URL?>/public/img/tree/join.gif">
                <img src="<?= URL?>/public/img/tree/folder.png">
                <a href="">Подменю 7.2</a>
            </div>
            <div class="rm_tree_sub">
                <img src="<?= URL?>/public/img/tree/empty.gif">
                <img src="<?= URL?>/public/img/tree/joinbottom.gif">
                <img src="<?= URL?>/public/img/tree/folder.png">
                <a href="">Подменю 7.3</a>
            </div>
        </div>

    </div>
    <!--Правое меню-->
