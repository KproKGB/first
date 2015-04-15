<?php
header('Content-Type: text/html; charset=utf-8');
include 'inc/data.inc.php';
?>
<html>
<head>
    <title>Генератор паролей</title>
</head>
<body>

<table width="50%" border="1" align='center'>
    <tr>
        <td align="center">
            <table width="100%">
                <tr>
                    <td align="center">
                        <h2>Генератор паролей</h2>
                        <form action='<?php echo $_SERVER['REQUEST_URI']?>' method='post'>
                            Варианты:
                            <input type='checkbox' checked name="zagl">Заглавные буквы
                            <input type='checkbox' checked name="propis">Маленькие буквы
                            <input type='checkbox' checked name="chisl">Цифры</br></br>
                            Длина пароля:
                            <input name="len" placeholder="Длинна пароля" value="8" autofocus required pattern="(^[0-9]+$)"><br><br>
                            Количество паролей:
                            <input name="kol" placeholder="Количество паролей" value="1" autofocus required pattern="(^[0-9]+$)"><br><br>
                            <input type="submit" value="Создать пароль">
                        </form>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td align="center">
            <h2>Результаты</h2>
            <?php echo genPass($am, $result);?>
        </td>
    </tr>

</table>
</body>
</html>