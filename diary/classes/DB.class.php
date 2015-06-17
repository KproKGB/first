<?php
class DB{
    protected static $_link;

    public static function dbConnect() {
        self::$_link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE);
        if (!self::$_link)
            echo 'Ошибка соединения: ' . mysqli_connect_errno();
    }

    public static function getLink() {

        if (!self::$_link) {
            self::dbConnect();
        }

        return self::$_link;
    }

    public static function dbClose() {
        mysqli_close(self::$_link);
    }
}