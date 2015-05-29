<?php
class Registred{
    protected $_link;
    protected $check;

    function dbConnect($dbhost, $dbuser, $dbpass, $dbbase){
        $this->_link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbbase);
    }
    function  regUser($login, $pass, $name, $surname, $email, $class){
        $sql = "INSERT INTO users (login, pass, name, surname, email, class)
                VALUES ('$login', '$pass', '$name', '$surname', '$email', '$class')";

        if(mysqli_query($this->_link, $sql) or die ('Error_create_user'))
            echo "Пользователь успешно создан";
    }

}