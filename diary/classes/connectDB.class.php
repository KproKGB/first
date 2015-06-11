<?php
class connectDB{
    protected $_link;

    function dbConnect($dbhost, $dbuser, $dbpass, $dbbase){
        $this->_link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbbase);
        if (!$this->_link)
            echo 'Ошибка соединения: ' . mysqli_connect_errno();
        else
            echo "Успешное подключение<br><br>";
    }

    function dbClose(){
        mysqli_close($this->_link);
    }
}
?>