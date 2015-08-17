<?php
	// подключение библиотек
	require "secure/session.inc.php";
    require "../inc/config.inc.php";
    require "../inc/lib.inc.php";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = clearStr($_POST['title']);
    $author = clearStr($_POST['author']);
    $pubyear = clearInt($_POST['pubyear']);
    $price = clearInt($_POST['price']);
}
if (!addItemToCatalog($title, $author, $pubyear, $price)) {
    echo "Произошла ошибка при добавлении товара в каталог";
    //echo "<br/>" . $title . "<br/>" . $author . "<br/>" . $pubyear . "<br/>" . $price;
} else {
    header("Location: add2cat.php");
    exit;
}
