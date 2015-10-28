<html>
<head>
    <meta charset="UTF-8"/>
    <title>PB test</title>
    <link rel="stylesheet" href="<?=URL?>public/css/style.css" />
</head>
<body>
<nav class="header">
    <a href="index">
        <img src="<?=URL?>public/img/logo_big1.png">
    </a>
    <ul>
        <?php if(Session::get('loggedIn') == false): ?>
        <li><a href="about">О центре</a></li>
        <li><a href="career">Присоединится к команде</a></li>
        <?php endif; ?>

        <?php if(Session::get('loggedIn') == true):?>
        <li><a href="<?= URL ?>/dashboard">Личный кабинет</a></li>
            <?php if(Session::get('role') == 'admin'):?>
            <li><a href="<?php echo URL; ?>/user">Пользователи</a></li>
            <?php endif; ?>
        <li><a href="<?= URL ?>/dashboard/logout">Выйти</a></li>
        <?php else: ?>
        <li><a href="login">Войти</a></li>
        <?php endif; ?>
    </ul>
</nav>
<div class="abs">