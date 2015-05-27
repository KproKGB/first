<?php
class newDiary
{
    protected $_link;

    function dbConnect($dbhost, $dbuser, $dbpass, $dbbase){
        $this->_link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbbase);
        if (!$this->_link)
            echo 'Ошибка соединения: ' . mysqli_connect_errno();
        else
            echo "Успешное подключение<br><br>";
    }

    function dbCreate(){
        $_sql = "CREATE DATABASE IF NOT EXISTS diary CHARACTER SET utf8";
        if(mysqli_query($this->_link, $_sql) or die ('Error_sql_db_create'))
            echo "База данных создана<br><br>";
    }

    function tableCreate(){
        $_sql = "CREATE TABLE IF NOT EXISTS  users
        (id int NOT NULL AUTO_INCREMENT,
        login varchar(20) NOT NULL,
        password VARCHAR(235) NOT NULL,
        email VARCHAR(235) NOT NULL,
        acctype INT NOT NULL,
        date TIMESTAMP,
        PRIMARY KEY(id));";

        if(mysqli_query($this->_link, $_sql) or die ('Error_sql_tab_user'))
            echo "Таблица users создана<br><br>";


        $_sql = "CREATE TABLE IF NOT EXISTS lessons
        (id int NOT NULL AUTO_INCREMENT,
        

        PRIMARY KEY(id))";


    }

    function dbClose(){
        mysqli_close($this->_link);
    }
}
?>