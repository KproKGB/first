<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
require 'classes/start.inc.php';
$a='Вася';
$b='c8837b23ff8aaa8a2dde915473ce0991';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $_SESSION['name'] = clearStr($_POST['name']);
    $_SESSION['pswd'] = clearStr($_POST['pswd']);
}
if(!isset ($_SESSION['name']) and !isset ($_SESSION['pswd'])){
    include "classes/loginForm.html";
    }
else {
    if ($_SESSION['name'] == $a and md5($_SESSION['pswd']) == $b) {
        echo "Вы авторизовались, как $a!";
        include "classes/logout.html";
    }
    else{
       echo $_SESSION['name'];
       echo $_SESSION['pswd'];
    }
}
if (isset($_POST['exit']))
    session_destroy();
?>