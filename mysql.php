<?php
$link = mysqli_connect('localhost', 'root', '');
if(!$link)
    echo 'Ошибка соединения: '. mysqli_connect_errno();
else
    echo "Успешное подключение<br><br>";
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

