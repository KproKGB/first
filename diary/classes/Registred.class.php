<?php
class Registred {

    function  regUser($login, $pass, $name, $surname, $email, $class) {
        $sql = "INSERT INTO users (login, pass, name, surname, email, class)
                VALUES (?, ?, ?, ?, ?, ?)";
        if (!$stmt = mysqli_prepare(DB::getLink(), $sql))
            return false;
        mysqli_stmt_bind_param($stmt, 'ssssss', $login, $pass, $name, $surname, $email, $class);
        mysqli_stmt_execute($stmt);
        echo "Пользователь успешно создан";
        mysqli_stmt_close($stmt);
        return true;
    }

    function checkUsr($login, $email) {
        $login = mysqli_real_escape_string(DB::getLink(), trim(htmlspecialchars($login)));
        $email = mysqli_real_escape_string(DB::getLink(), trim(htmlspecialchars($email)));
        $sql = "SELECT login FROM users WHERE login='$login' OR email='$email'";
        $query = mysqli_query(DB::getLink(), $sql);
        $check = mysqli_num_rows($query);
        if($check>0) {
            echo "Пользователь уже существует<br>";
            return false;
        }
        return true;
    }
}