<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $reg_login = trim(htmlspecialchars($_POST['reg_login']));
    $reg_email = trim(htmlspecialchars($_POST['reg_email']));
    $reg_name = trim(htmlspecialchars($_POST['reg_name']));
    $reg_surname = trim(htmlspecialchars($_POST['reg_surname']));
    $reg_pswd1 = md5(trim(htmlspecialchars($_POST['reg_pswd1'])));
    $reg_pswd2 = md5(trim(htmlspecialchars($_POST['reg_pswd2'])));
    $reg_class = trim(htmlspecialchars($_POST['reg_class']));

    include "classes/reg.class.php";
    include "inc/parse_ini.inc.php";
    if($reg_pswd1 !== $reg_pswd2) {
        echo "Пароли не совпадают!";
        include 'inc/form/registred.html';
    }else{
        $newUser = new Registred();
        $newUser->dbConnect($host, $user, $pass, $base);
        $newUser->regUser($reg_login, $reg_pswd1, $reg_name, $reg_surname, $reg_email, $reg_class);
    }
}else{
    include 'inc/form/registred.html';
}
?>