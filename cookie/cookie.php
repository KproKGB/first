<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <title>Логин</title>
</head>
<body>
<iframe src="../clock.php" width="240" height="50" align="right" style="border: none;"></iframe>
</body>
</html>
<?php
$a='Вася';
$b='c8837b23ff8aaa8a2dde915473ce0991';
    if($_SERVER['REQUEST_METHOD']=='GET') {
        if (isset($_COOKIE['visitCount'])) {
            echo "Вы уже авторизовались, как $a!";
            include "inc/logout.html";
        }
        else
            include "inc/loginForm.html";
    }

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name=trim(strip_tags($_POST['name']));
        $pswd=$_POST['pswd'];
        if($name==$a && $b==md5($pswd)) {
            include "inc/cookie.inc.php";
            if($visitCount == 1){
                echo 'Добро пожаловать, ' . $name . '!';
                include "inc/logout.html";
            }
            else{
                header('Location: '.$_SERVER['PHP_SELF'] );
                /*echo "$name, вы зашли к нам $visitCount раз<br>";
                echo "Последние посещение: $lastVisit";
                include "logout.html";*/
            }
        }
    else {
        echo "Неверные данные<br><br>";
        include "inc/loginForm.html";

    }
    }
    if (isset($_POST['exit'])){
        setcookie('visitCount', $visitCount, time() - 3600);
        setcookie('lastVisit', time() - 3600);
        header("Location: /index.php?id=cookie");
    }
    if (isset($_POST['calc']))
        header("Location: /index.php?id=calc");

?>