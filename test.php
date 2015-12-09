<html>
<head>
	<meta charset="UTF-8"/>
	<title>test</title>
	<style>
		ul {
			margin: 0;
			padding: 4px;
		}
		ul li {
			display: inline;
			cursor: pointer;
			padding: 3px;
			border: 1px solid #000;
			margin-right: 5px;
		}
	</style>
	<script type="text/javascript">
		function getCookie(name) {
			var matches = document.cookie.match(new RegExp(
				"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
			));
			return matches ? decodeURIComponent(matches[1]) : undefined;
		}
		function setLang() {
			if(getCookie('lang') == 'ru') {
				ruMenu();
			} else {
				enMenu();
			}
		}
		function enMenu() {
			document.getElementById('en').style.display = "block";
			document.getElementById('ru').style.display = "none";
			document.cookie = "lang=en";
		}
		function ruMenu() {
			document.getElementById('ru').style.display = "block";
			document.getElementById('en').style.display = "none";
			document.cookie = "lang=ru";
		}
	</script>
</head>
<body onload="setLang()">
	<ul>
		<li onclick="ruMenu()">Ru</li>
		<li onclick="enMenu()">En</li>
	</ul>
	<div id="ru">
		<form class="login" action="" method="post">
			<input type="text" name="login" placeholder="Логин" value="" data-multilang="1" data-lang-en-placeholder="Login"><br>
			<input type="password" name="password" placeholder="Пароль" value=""><br>
			<input type="submit" value="Отправить">
		</form>
	</div>

<!--		<span data-multilang="1" data-lang-en-content="Welcome!">Добро пожаловать!</span>-->

	<div id="en" style="display: none">
		<form class="login" action="" method="post">
			<input type="text" name="login" placeholder="Login" value=""><br>
			<input type="password" name="password" placeholder="Password" value=""><br>
			<input type="submit" value="Submit">
		</form>
	</div>
</body>
</html>