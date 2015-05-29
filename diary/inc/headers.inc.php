<?php
$title = 'KproKGB test diary';
$header = "Добро пожаловать на Test-сайт";
if (isset($_GET['id'])) {
    $id = strtolower(strip_tags(trim($_GET['id'])));

    switch ($id) {
        case "registred":
            $title = "Reg";
            $header = "Test Reg";
            break;
        case "install":
            $title = "Установка базы данных для Online-дневника";
            $header = "Install DB";
            break;
        case "login":
            $title = "LogIn";
            $header = "LogIN";
            break;
    }
}
?>