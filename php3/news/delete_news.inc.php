<?php
if(isset($_GET['del'])) {
    $del = abs((int)$_GET['del']);
    if ($del) {
        if(!$news->deleteNews($id)) {
            echo "Произошла ошибка при удалении новости";
        }
    }
    header('Location: news.php');
    exit;
}