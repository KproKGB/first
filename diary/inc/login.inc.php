<?php
include 'classes/login.class.php';
include "inc/parse_ini.inc.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $_SESSION['lname'] = trim(htmlspecialchars($_POST['lname']));
        $_SESSION['lpswd'] = $_POST['lpswd'];
        $loginU = new loginUsers();
        $loginU->dbConnect($host, $user, $pass, $base);
        if($loginU->loginUsr($_SESSION['lname'], $_SESSION['lpswd'])){
            echo "Успешная авторизация";
        }
        $loginU->dbClose();
    }
?>