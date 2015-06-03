<?php
include 'classes/login.class.php';
include "inc/parse_ini.inc.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $_SESSION['lname'] = trim(htmlspecialchars($_POST['lname']));
        $_SESSION['lpswd'] = $_POST['lpswd'];
        header("Location: ".$_SERVER['REQUEST_URI']);
    }
$loginU = new loginUsers();
$loginU->dbConnect($host, $user, $pass, $base);
if($loginU->loginUsr($_SESSION['lname'], $_SESSION['lpswd'])){
    echo "Успешная авторизация";
}
$loginU->dbClose();
if(!$_SERVER['REQUEST_METHOD']=='POST'){
    include "inc/form/loginForm.html";
}
?>
