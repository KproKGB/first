<?php
$t = $news->clearStr($_POST['title']);
$d = $news->clearStr($_POST['description']);
$s = $news->clearStr($_POST['source']);
$c = $news->clearInt($_POST['category']);

if(empty($t) or empty($d)) {
    $errMsg = "��������� ��� ���� �����";
} else {
    if(!$news->saveNews($t, $c, $d, $s)) {
        $errMsg = "��������� ������ ��� ���������� �������";
    } else {
        header("Location: news.php");
        exit;
    }
}

