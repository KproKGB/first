<?php
$title = 'Online diary';
$header = "Welcome";
if (isset($_GET['id'])) {
    $id = strtolower(strip_tags(trim($_GET['id'])));

    switch ($id) {
        case "registred":
            $title = "Добавление ученика";
            $header = "Add to DB";
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