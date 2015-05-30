<?php
class Registred{
    protected $_link;

    function dbConnect($dbhost, $dbuser, $dbpass, $dbbase){
        $this->_link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbbase);
    }
    function  regUser($login, $pass, $name, $surname, $email, $class)
    {
        $sql = "INSERT INTO users (login, pass, name, surname, email, class)
                VALUES (?, ?, ?, ?, ?, ?)";
        if (!$stmt = mysqli_prepare($this->_link, $sql))
            return false;
        mysqli_stmt_bind_param($stmt, 'ssssss', $login, $pass, $name, $surname, $email, $class);
        mysqli_stmt_execute($stmt);
        echo "Пользователь успешно создан";
        mysqli_stmt_close($stmt);
        return true;
    }
    function checkUsr($login, $email){
        $login = mysqli_real_escape_string($this->_link, trim(htmlspecialchars($login)));
        $email = mysqli_real_escape_string($this->_link, trim(htmlspecialchars($email)));
        $sql = "SELECT login FROM users WHERE login='$login' OR email='$email'";
        $query = mysqli_query($this->_link, $sql);
        $check = mysqli_num_rows($query);
        if($check>0) {
            echo "Пользователь уже существует<br>";
            return false;
        }
        return true;
    }
}