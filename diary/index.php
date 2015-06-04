<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
include 'inc/parse_ini.inc.php';
include 'inc/headers.inc.php';
include 'classes/login.class.php';
$loginUsr = new loginUsers();
$loginUsr->dbConnect($host, $user, $pass, $base);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['lname'] = trim(htmlspecialchars($_POST['lname']));
    $_SESSION['lpswd'] = $_POST['lpswd'];
    header("Location: " .$_SERVER['REQUEST_URI']);
}

if (isset($_SESSION['lname']) and !empty($_SESSION['lname'])) {
    if($loginUsr->loginUsr($_SESSION['lname'], $_SESSION['lpswd'])){
        include 'inc/form/start.html';
    }
}
else {
    include 'inc/form/loginForm.html';
}
$loginUsr->dbClose();
?>