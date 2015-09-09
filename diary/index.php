<?php
session_start();
include_once 'inc/headers.inc.php';
require_once 'inc/system.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lname = trim(htmlspecialchars($_POST['lname']));
    $lpswd = $_POST['lpswd'];

    $_SESSION["lname"] = $lname;
    $_SESSION["lpswd"] = $lpswd;
    //header("Location: " .$_SERVER['REQUEST_URI']);
} else {
    $lname = $_SESSION["lname"];
    $lpswd = $_SESSION["lpswd"];
}
if ($lname and $lpswd) {
    $loginUsr = new LoginUsers();
    $connect = new DB();
    $connect->dbConnect();
    if($loginUsr->loginUsr($lname, $lpswd)){
        include 'inc/main.php';
    }
} else {
    include 'inc/loginForm.php';
}
