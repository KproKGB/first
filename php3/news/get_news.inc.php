<?php
$posts = $news->getNews();
if(!$posts){
    $errMsg = "Произошла ошибка при выводе новостной ленты";
} else {
    foreach($posts as $item) {
        $id = $item['id'];
        $title = $item['title'];
        $category = $item['category'];
        $description = $item['description'];
        $source = $item['source'];
        echo<<<HTML
    <p><a href="$source">$title</a> в рубрике $category</p>
    <p>$description</p>
    <p align="right"><a href="{$_SERVER['REQUEST_URI']}&del=$id">Удалить</a></p>
    <hr>
HTML;
    }
}