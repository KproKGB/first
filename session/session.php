<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
$a='Вася';
$b='c8837b23ff8aaa8a2dde915473ce0991';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $_SESSION['name'] = trim(strip_tags($_POST['name']));
    $_SESSION['pswd'] = $_POST['pswd'];
}
if(isset ($_SESSION['name']) and isset ($_SESSION['pswd'])){
if ($_SESSION['name'] == $a and md5($_SESSION['pswd']) == $b) {
        echo "Вы авторизовались, как $a!";
        include "inc/logout.html";
}}
else {
    include "inc/loginForm.html";
}

if (isset($_POST['exit']))
    session_destroy();

?>