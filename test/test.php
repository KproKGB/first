<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
    if(!isset($_SESSION['test']) and !isset($_POST['q'])){     //Если первый запуск теста инициализируем переменные
        $q = 0;
        $title = 'Пройдите тест';
    }else{         //Создаем сессионную переменную тест, содержащую массив ответов
        if($_POST['q'] != '1')
            $_SESSION['test'][] = $_POST['answer'];
        $q =  $_POST['q'];
        $title = $_POST['title'];
    }
?>
<html>
<head>
    <title>Тест</title>
</head>
<body>

<table width="50%" border="1" align='center'>

    <tr>
        <td align="center">
            <!-- Верхняя часть страницы -->
            <table width="100%">
                <tr>
                    <td align="center">
                        <h1><?=$title?></h1>
                        <p><a href='/cookie/index.php'>Прервать тест и вернуться на сайт</a></p>
                    </td>
                </tr>
            </table>
            <!-- Верхняя часть страницы -->
        </td>
    </tr>

    <tr>
        <td>
            <!-- Область основного контента -->
            <?php // В зависимости от номера вопроса, подключаем соответствующий файл с вопросами
            switch($q){
                case 0: include 'start.php'; break;
                case 1: include 'q1.php'; break;
                case 2: include 'q2.php'; break;
                case 3: include 'q3.php'; break;
                case 4: include 'result.php';
            }
            ?>
            <!-- Область основного контента -->
        </td>
    </tr>
</table>
</body>
</html>
