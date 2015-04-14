<?php
header('Content-Type: text/html; charset=utf-8');
include 'inc/data.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $k = (int)$_POST['kol'];
    $d = (int)$_POST['len'];

    $am = arrMer($c, $z, $p);
    print_r($am);
    echo "<br><br>";
    $l = countArr($am);
    echo $l . " элемента";

    for ($j = 0; $j < $k; $j++) {
        for ($i = 0; $i < $d; $i++) {
            $s = rand(0, 2);
            if ($s === 0) {
                $l = rand(0, 25);
                $result .= $z[$l];
            }
            if ($s === 1) {
                $l = rand(0, 25);
                $result .= $p[$l];
            }
            if ($s === 2) {
                $l = rand(0, 9);
                $result .= $c[$l];
            }
        }
    }

}
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
                            <input type='checkbox' name="z">Заглавные буквы
                            <input type='checkbox' name="p">Маленькие буквы
                            <input type='checkbox' name="c">Цифры</br></br>
                            Длина пароля:
                            <input name="len" placeholder="Длинна пароля" value="<?php $d?>" autofocus required pattern="(^[0-9]+$)"><br><br>
                            Количество паролей:
                            <input name="kol" placeholder="Количество паролей" value="<?php $k?>" autofocus required pattern="(^[0-9]+$)"><br><br>
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
            <?php echo $result;?>
        </td>
    </tr>

</table>
</body>
</html>