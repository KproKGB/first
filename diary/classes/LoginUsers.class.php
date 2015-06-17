<?php
class LoginUsers {

    function loginUsr($login, $password) {
        $login = mysqli_real_escape_string(DB::getLink(), trim(htmlspecialchars($login)));
        $password = mysqli_real_escape_string(DB::getLink(), md5(trim(htmlspecialchars($password))));
        $sql = "SELECT login FROM users WHERE login='$login' AND pass='$password'";
        $query = mysqli_query(DB::getLink(), $sql);
        $count = mysqli_num_rows($query);
        if (!$count) {
            echo "Ошибка авторизации!!!";
            session_destroy();
        }
        return !!$count;
    }
}