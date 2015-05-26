<?php
class newDiary
{
    protected $_link;
    const DBHOST = 'localhost';
    const DBLOGIN = 'root';
    const DBPASS = '1811';

    function dbConnect(){
        $this->_link = mysqli_connect(self::DBHOST, self::DBLOGIN, self::DBPASS);
        if (!$this->_link)
            echo 'Ошибка соединения: ' . mysqli_connect_errno();
        else
            echo "Успешное подключение<br><br>";

    }
    function dbCreate(){
        $this->_link = mysqli_connect(self::DBHOST, self::DBLOGIN, self::DBPASS);
        $_sql = "CREATE TABLE IF NOT EXISTS  users (id int NOT NULL AUTO_INCREMENT,
                            login varchar(20) NOT NULL,
                            password VARCHAR(235) NOT NULL,
                            email VARCHAR(235) NOT NULL,
                            acctype VARCHAR(235) NOT NULL,
                            date TIMESTAMP,
                            PRIMARY KEY(id));";

        mysqli_query($this->_link, $_sql) or die ('Error');
    }

}
?>