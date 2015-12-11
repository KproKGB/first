<html>
<head>
	<meta charset="UTF-8"/>
	<title>Тестовое задание</title>
	<link rel="stylesheet" href="<?=URL?>public/css/style.css" />
	<script type="text/javascript" src="<?=URL?>public/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?=URL?>public/js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="<?=URL?>public/js/custom.js"></script>
</head>
<body onload="setLang()">

<nav class="header">
	<ul>
		<?php if(Session::get('loggedIn') == false): ?>
			<li><a href="<?=URL?>">
					<?php if($_COOKIE['lang'] == 'ru')echo "ГЛАВНАЯ"; else echo "MAIN";?>
				</a></li>
			<li><a href="<?=URL?>registred">
					<?php if($_COOKIE['lang'] == 'ru')echo "РЕГИСТРАЦИЯ"; else echo "CHECK IN";?>
				</a></li>
		<?php endif; ?>

		<?php if(Session::get('loggedIn') == true):?>
			<li><a href="<?= URL ?>dashboard">
					<?php if($_COOKIE['lang'] == 'ru')echo "ЛИЧНЫЙ КАБИНЕТ"; else echo "DASHBOARD";?>
				</a></li>
			<li><a href="<?= URL ?>dashboard/logout">
					<?php if($_COOKIE['lang'] == 'ru')echo "ВЫЙТИ"; else echo "LOG OUT";?>
				</a></li>
		<?php else: ?>
			<li><a href="<?=URL?>login">
					<?php if($_COOKIE['lang'] == 'ru')echo "ВОЙТИ"; else echo "LOG IN";?>
				</a></li>
		<?php endif; ?>

		<?php if($_COOKIE['lang'] == 'ru'): ?>
		<li class="lang" onclick="enMenu()"><a href="">EN</a></li>
		<?php else: ?>
		<li class="lang" onclick="ruMenu()"><a href="">РУС</a></li>
		<?php endif; ?>
	</ul>
</nav>