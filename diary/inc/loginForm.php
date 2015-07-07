<html>
<head>
    <meta charset="utf-8"/>
    <link href="inc/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id="content">
    <div id="mypanel">
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <label for="login">Логин:</label><br>
            <input size="25" id="login" type="text" name="lname" placeholder="Логин" value="admin"><br>
            <label for="pass">Пароль:</label><br>
            <input size="25" id="pass" type='password' name="lpswd" placeholder="Пароль" value="123321"><br><br>
            <input type="submit" value="Вход">
        </form>
</div>
</div>
            <div id="footer">
                &copy; Kpro-dev, <?= date('Y')?>
                <br />
                <a href="/inc/installDb.inc.php">InstallDB</a>
            </div>
</body>
</html>



