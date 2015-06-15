<?php
class loginUsers{
    protected $_link;
    function dbConnect($dbhost, $dbuser, $dbpass, $dbbase){
        $this->_link = mysqli_connect($dbhost, $dbuser, $dbpass, $dbbase);
    }

    function loginUsr($login, $password){
        $login = mysqli_real_escape_string($this->_link, trim(htmlspecialchars($login)));
        $password = mysqli_real_escape_string($this->_link, md5(trim(htmlspecialchars($password))));
        $sql = "SELECT login FROM users WHERE login='$login' AND pass='$password'";
        $query = mysqli_query($this->_link, $sql);
        $count = mysqli_num_rows($query);
        if (!$count) {
            echo "Ошибка авторизации!!!";
            session_destroy();
        }
        return !!$count;
    }

    function dbClose(){
        mysqli_close($this->_link);
    }
}
?>