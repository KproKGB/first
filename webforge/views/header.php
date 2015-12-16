<?php
	$lang = isset($_COOKIE["lang"])? $_COOKIE["lang"]: "ru";
	$array = parse_ini_file('config/lang/' .$lang.".ini");
?>
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
			<li><a href="<?=URL?>"><?= $array['MAIN']?></a></li>
			<li><a href="<?=URL?>registred"><?= $array['CHECK']?></a></li>
		<?php endif; ?>

		<?php if(Session::get('loggedIn') == true):?>
			<li><a href="<?= URL ?>dashboard"><?= $array["DASHBOARD"]?></a></li>
			<li><a href="<?= URL ?>dashboard/logout"><?= $array["OUT"]?></a></li>
		<?php else: ?>
			<li><a href="<?=URL?>login"><?= $array["IN"]?></a></li>
			<?php if($lang == 'ru'): ?>
				<li class="lang" onclick="enMenu()"><a href="">EN</a></li>
			<?php else: ?>
				<li class="lang" onclick="ruMenu()"><a href="">РУС</a></li>
			<?php endif; ?>
		<?php endif; ?>
	</ul>
</nav>