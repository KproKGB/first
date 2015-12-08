<html>
<head>
    <meta charset="UTF-8"/>
    <title>Центр претензионно-исковой работы ПАТ КБ "ПриватБанк"</title>
    <link rel="stylesheet" href="<?=URL?>public/css/style.css" />
    <script type="text/javascript" src="<?=URL?>public/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="<?=URL?>public/js/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="<?=URL?>public/js/custom.js"></script>
</head>
<body>

<nav class="header">
        <?php if(Session::get('loggedIn') == true): ?>
            <img src="<?=URL?>public/img/logo_big1.png">
        <?php else: ?>
            <a href="<?=URL?>index"><img src="<?=URL?>public/img/logo_big1.png"></a>
        <?php endif; ?>

    <ul>
        <?php if(Session::get('loggedIn') == false): ?>
        <li><a href="<?=URL?>about">О центре</a></li>
        <li><a href="<?=URL?>career">Присоединится к команде</a></li>
        <?php endif; ?>

        <?php if(Session::get('loggedIn') == true):?>
        <li><a href="<?= URL ?>dashboard">Просмотр резюме</a></li>
        <li><a href="<?= URL ?>dashboard/resume">Добавить ваккансию</a></li>
            <?php if(Session::get('role') == 'admin'):?>
            <li><a href="<?php echo URL; ?>user">Пользователи</a></li>
            <?php endif; ?>
        <li class="login_bot"><a href="<?= URL ?>dashboard/logout">Выйти</a></li>
        <?php else: ?>
        <li class="login_bot"><a href="<?=URL?>login">Войти</a></li>
        <?php endif; ?>
    </ul>
</nav>