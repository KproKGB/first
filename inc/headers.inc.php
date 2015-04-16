<?php
$title = 'KproKGB';
$header = "Добро пожаловать на Test-сайт";
if (isset($_GET['id'])) {
    $id = strtolower(strip_tags(trim($_GET['id'])));

    switch ($id) {
        case "cookie":
            $title = "Cookie";
            $header = "Test Cookie";
            break;
        case "session":
            $title = "Session";
            $header = "Test Session";
            break;
        case "test":
            $title = "Test";
            $header = "Test";
            break;
        case"gen":
            $title = "GenPass";
            $header = "Test GenPass";
            break;
        case"log":
            $title = "Log";
            $header = "Test LogToFiles";
            break;
        case"calc":
            $title = "Calculator";
            $header = "Test Calculator";
            break;
    }
}
?>