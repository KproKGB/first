<?php
if(isset($_SESSION['lname'])){
    echo <<< HTML
    <div id="content">
        <h1><?= $header?></h1>

</div>
<div id="nav">
    <h2>Навигация по сайту</h2>
    <ul>
        <li><a href="index.php?id=login">Вход</a></li>
        <li><a href="index.php?id=registred">Добавить ученика</a></li>
        <li><a href="index.php?id=install">Установка БД</a></li>
        <li><a href="index.php?id=logout">Выход</a></li>
    </ul>
</div>
HTML;
}
else {
    include 'inc/form/loginForm.html';
    include 'inc/login.inc.php';
}
?>