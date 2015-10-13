<html>
<head>
    <title>Electro-Land</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="inc/style/style.css" />
    <link rel="stylesheet" href="inc/style/main.css" />
    <link rel="stylesheet" href="inc/style/basket.css" />
    <link rel="stylesheet" href="inc/style/topmenu.css" />
    <link rel="stylesheet" href="inc/style/rmenu.css" />
    <link rel="stylesheet" href="inc/style/footer.css" />


    <script type="text/javascript">
        function showBasket() {
            var bask = document.getElementById('basket_empty');
            bask.style.display = "block";
        }
        function hideBasket() {
            var bask = document.getElementById('basket_empty');
            bask.style.display = "";
        }
    </script>
    <script type="text/javascript">
        function setPlusIcon() {
            var rm = document.getElementById("right_menu");
            var allDivs = rm.getElementsByClassName("rm_tree");
            for (var i = 0; i < allDivs.length; i++) {
                var div = allDivs[i].getElementsByTagName("div");
                var tree = allDivs[i].getElementsByTagName("img");
                if (tree.length > 0) {
                    tree[1].src = "img/tree/folder.png";
                    if (div.length == 0) {
                        tree[0].src = "img/tree/join.gif";
                    } else {
                        tree[0].src = "img/tree/plus.gif";
                    }
                }
            }

            if (allDivs[allDivs.length - 1]) {
                tree[0].src = "img/tree/plusbottom.gif";
            }
            var allA = rm.getElementsByTagName("A");
            for (var i = 0; i < allA.length; i++) {
                allA[i].addEventListener("click", aClick, false);
            }
        }
        window.onload = setPlusIcon;

        function aClick(e){
            e = e || event;
            var odjA = e.target || e.srcElement;
            var div = odjA.parentNode;
            var lastDiv = div.parentNode.getElementsByClassName("rm_tree");
            var divs = div.getElementsByTagName("div");
            var img = div.getElementsByTagName("img");
            if(divs.length == 0) {
                return true;
            }
            for(var i=0; i<divs.length; i++) {
                    if (divs[i].style.display == "block") {
                        divs[i].style.display = "";
                        img[1].src = "img/tree/folder.png";
                        if(lastDiv[lastDiv.length-1]){
                            img[0].src = "img/tree/plusbottom.gif";
                        } else {
                            img[0].src = "img/tree/plus.gif";
                        }
                    } else {
                        divs[i].style.display = "block";
                        img[1].src = "img/tree/imgfolder.png";
                        if(lastDiv[lastDiv.length-1]){
                            img[0].src = "img/tree/minusbottom.gif";
                        } else {
                            img[0].src = "img/tree/minus.gif";
                        }
                    }
                    try {
                        e.preventDefault();
                    } catch (x) {
                        e.returnValue = false;
                    }
            }
        }
    </script>
</head>
<body>
<div class="body">

    <!--Корзина-->
    <div class="basket" onmouseover="showBasket()" onmouseout="hideBasket()">
        <div class="basket_order">0 ед.</div>
        <div class="basket_arr"></div>
        <div class="basket_empty" id="basket_empty"></div>
    </div>
    <!--Корзина-->


    <!--Логотип-->
    <div class="header">
        <a href="#"><img src="img/logo.png" width="489" height="85" class="logo" /></a>
    </div>
    <!--Логотип-->


    <!--Верхнее меню-->
    <div class="topmenu">
        <ul>
            <li><a href="#1">ГЛАВНАЯ</a></li>
            <li><a href="#2">МАГАЗИН</a></li>
            <li><a href="#3">ДОСТАВКА И ОПЛАТА</a></li>
            <li><a href="#4">ИНФОРМАЦИЯ</a></li>
        </ul>
    </div>
    <!--Верхнее меню-->



    <!--Показываем расположение на сайте (по меню)-->
    <div class="showHere">
        <span>Вы находитесь:</span>
        <span><a href='index.php'>Electro-land</a><img src="img/arrow.png"><a href='#2'>Shop<a></span>
    </div>
    <!--Показываем расположение на сайте (по меню)-->

    <!--Блок основного контента-->
    <div class="main">
        <h2><strong>Дорогой Клиент!</strong></h2>
        <h2><strong>Добро пожаловать в Интернет-магазин «Electro-land»!</strong></h2>

        <p>Интернет-магазин электротехники «Electro-land» открыт для удобства и простоты выбора электротехнических
            товаров нашими Клиентами. Благодаря широкому ассортименту, высокому качеству товаров, Вы можете без труда
            выбрать  все необходимое электротехническое оборудование по доступным ценам! Продажа товаров в
            интернет-магазине электротехники  производится по безналичному расчету для физических и юридических лиц.
            Соответственно, нашим Клиентом может стать каждый!</p>

        <p>Удобство интернет-магазина электротехники «Electro-land» состоит в возможности получить покупателям
            всю необходимую информацию о приобретаемой электротехнической продукции: технические характеристики,
            фото, цена.</p>

        <p>Заказ товара Вы можете сделать быстро и легко – в режиме он-лайн. Если при оформлении покупки товара
            у Вас возникли какие-либо вопросы, получить на них ответ Вы можете у нашего консультанта в телефонном
            режиме.</p>

        <p>Вы строите дом, дачу, делаете ремонт в квартире, меняете проводку, выключатели, розетки или
            автоматические выключатели, Вам необходимо заменить вводный щит, перенести электрический счетчик
            или установить дифференциальный автомат, а также если Вы желаете обезопасить себя и произвести
            монтаж УЗО для защиты от поражения электрическим током  – интернет-магазин «Electro-land» к Вашим
            услугам!</p>

        <p>Вашему вниманию также представлены товары для промышленной отрасли:  любая техника промышленного
            контроля и автоматика - начиная от клеммы, сигнальной лампы, переключателя и кнопки – до концевого
            выключателя, пускателя, реле времени преобразователя частоты и плавного пуска.</p>
    </div>
    <!--Блок основного контента-->

    <!--Правое меню-->
    <div id="right_menu" class="right_menu">
        <div class="rm_top">
            <img src="img/tree/base.png">
            <a href="">Магазин</a>
        </div>

        <div class="rm_tree">
            <img src="img/tree/minus.gif">
            <img src="img/tree/imgfolder.png">
            <a href="">Меню 1</a>


                <div class="rm_tree_sub">
                    <img src="img/tree/line.gif">
                    <img src="img/tree/join.gif">
                    <img src="img/tree/folder.png">
                    <a href="">Подменю 1.1</a>
                </div>
                <div class="rm_tree_sub">
                    <img src="img/tree/line.gif">
                    <img src="img/tree/join.gif">
                    <img src="img/tree/folder.png">
                    <a href="">Подменю 1.2</a>
                </div>
                <div class="rm_tree_sub">
                    <img src="img/tree/line.gif">
                    <img src="img/tree/joinbottom.gif">
                    <img src="img/tree/folder.png">
                    <a href="">Подменю 1.3</a>
                </div>
        </div>
        <div class="rm_tree">
            <img src="img/tree/minus.gif">
            <img src="img/tree/imgfolder.png">
            <a href="">Меню 2</a>

                <div class="rm_tree_sub">
                    <img src="img/tree/line.gif">
                    <img src="img/tree/join.gif">
                    <img src="img/tree/folder.png">
                    <a href="">Подменю 2.1</a>
                </div>
                <div class="rm_tree_sub">
                    <img src="img/tree/line.gif">
                    <img src="img/tree/join.gif">
                    <img src="img/tree/folder.png">
                    <a href="">Подменю 2.2</a>
                </div>
                <div class="rm_tree_sub">
                    <img src="img/tree/line.gif">
                    <img src="img/tree/joinbottom.gif">
                    <img src="img/tree/folder.png">
                    <a href="">Подменю 2.3</a>
                </div>
        </div>

        <div class="rm_tree">
            <img src="img/tree/minus.gif">
            <img src="img/tree/imgfolder.png">
            <a href="">Меню 3</a>


                <div class="rm_tree_sub">
                    <img src="img/tree/line.gif">
                    <img src="img/tree/join.gif">
                    <img src="img/tree/folder.png">
                    <a href="">Подменю 3.1</a>
                </div>
                <div class="rm_tree_sub">
                    <img src="img/tree/line.gif">
                    <img src="img/tree/join.gif">
                    <img src="img/tree/folder.png">
                    <a href="">Подменю 3.2</a>
                </div>
                <div class="rm_tree_sub">
                    <img src="img/tree/line.gif">
                    <img src="img/tree/joinbottom.gif">
                    <img src="img/tree/folder.png">
                    <a href="">Подменю 3.3</a>
                </div>
        </div>

        <div class="rm_tree">
            <img src="img/tree/plus.gif">
            <img src="img/tree/folder.png">
            <a href="">Меню 4</a>
        </div>
        <div class="rm_tree">
            <img src="img/tree/plus.gif">
            <img src="img/tree/folder.png">
            <a href="">Меню 5</a>
        </div>
        <div class="rm_tree">
            <img src="img/tree/plus.gif">
            <img src="img/tree/folder.png">
            <a href="">Меню 6</a>
        </div>
        <div class="rm_tree">
            <img src="img/tree/minusbottom.gif">
            <img src="img/tree/imgfolder.png">
            <a href="">Меню 7</a>

                <div class="rm_tree_sub">
                    <img src="img/tree/empty.gif">
                    <img src="img/tree/join.gif">
                    <img src="img/tree/folder.png">
                    <a href="">Подменю 7.1</a>
                </div>
                <div class="rm_tree_sub">
                    <img src="img/tree/empty.gif">
                    <img src="img/tree/join.gif">
                    <img src="img/tree/folder.png">
                    <a href="">Подменю 7.2</a>
                </div>
                <div class="rm_tree_sub">
                    <img src="img/tree/empty.gif">
                    <img src="img/tree/joinbottom.gif">
                    <img src="img/tree/folder.png">
                    <a href="">Подменю 7.3</a>
                </div>
        </div>

    </div>
    <!--Правое меню-->


</div>

    <!--Футер-->
    <div class="footer">
       &copy; 05-2015 - <?= date('m-Y')?> Electro-land.dp.ua | Designed by <a href="http://nickolay-kgb.in.ua"> Kpro</a>
    </div>
<!--Футер-->

</body>
</html>
