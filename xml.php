<?php
$dom = new domDocument("1.0", "utf-8"); // Создаём XML-документ версии 1.0 с кодировкой utf-8
$dom->load("users.xml"); // Загружаем XML-документ из файла в объект DOM
$root = $dom->documentElement; // Получаем корневой элемент
$childs = $root->childNodes; // Получаем дочерние элементы у корневого элемента
/* Перебираем полученные элементы */
for ($i = 0; $i < $childs->length; $i++) {
    $user = $childs->item($i); // Получаем следующий элемент из NodeList
    $lp = $user->childNodes; // Получаем дочерние элементы у узла "user"
    $id = $user->getAttribute("id"); // Получаем значение атрибута "id" у узла "user"
    $login = $lp->item(0)->nodeValue; // Получаем значение узла "login"
    $password = $lp->item(1)->nodeValue; // Получаем значение узла "password"
    /* Выводим полученные данные */
    echo "ID: $id<br />";
    echo "Логин: $login<br />";
    echo "Пароль: $password<br />";
    echo "-----------------------<br />";
}
?>