<?php
session_start();
require_once 'inc/system.inc.php';
include_once 'inc/headers.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['lname'] = trim(htmlspecialchars($_POST['lname']));
    $_SESSION['lpswd'] = $_POST['lpswd'];
    header("Location: " .$_SERVER['REQUEST_URI']);
}
if (isset($_SESSION['lname']) and !empty($_SESSION['lname'])) {
    $loginUsr = new LoginUsers();
    $connect = new DB();
    $connect->dbConnect();
    if($loginUsr->loginUsr($_SESSION['lname'], $_SESSION['lpswd'])){
        include 'inc/form/start.html';
    }
}
else {
    include 'inc/form/loginForm.html';
}