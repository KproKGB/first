<?php
if(isset($_GET['del'])) {
    $id = abs((int)$_GET['del']);
    if ($id) {
        if(!$news->deleteNews($id)) {
            echo "Произошла ошибка при удалении новости";
        }
    }
    header('Location: news.php');
    exit;
}