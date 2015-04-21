<?php
define('DB_HOST', 'localhost');
define('DB_USR', 'root');
define('DB_PASS', '');
define('DB_NAM', 'mysite');

$link = mysqli_connect(DB_HOST, DB_USR, DB_PASS, DB_NAM);
if(!$link)
    echo 'Ошибка соединения: '. mysqli_connect_errno();
else
    echo "Успешное подключение<br><br>";


// http://www.site-do.ru/db/sql1.php
//IF NOT EXISTS - если таблица существует, то база не будет создана и не будет выведена ошибка.

$sql = "CREATE TABLE IF NOT EXISTS  users (id int NOT NULL AUTO_INCREMENT,
                            login varchar(20) NOT NULL,
                            password VARCHAR(235) NOT NULL,
                            email VARCHAR(235) NOT NULL,
                            date TIMESTAMP,
                            PRIMARY KEY(id));";

mysqli_query($link, $sql) or die ('Error');

mysqli_close($link);
?>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>mysql тест</title>
</head>
<body>
<form action="index.php">
    <button type="submit">Назад</button>
</form>
</body>
</html>

