<?php
$title = 'Online diary';
$header = "Welcome";
if (isset($id)) {
        switch ($id) {
            case "registred":
                $title = "Добавление ученика";
                $header = "Add users to DB";
                break;
            case "install":
                $title = "Установка базы данных для Online-дневника";
                $header = "Install Dairy DB";
                break;
            case "table":
                $title = "Таблица учеников";
                $header = "Table users";
                break;
        }
}