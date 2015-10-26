<?php
class Cart {
    public static $basket = array();
    public static $count;
    public static function saveBasket() {
        self::$basket = base64_encode(serialize(self::$basket));
        setcookie('basket', self::$basket, 0x7FFFFFFF);
    }

    public static function basketInit() {
        if(!isset($_COOKIE['basket'])) {
            self::$basket = ['orderid' => uniqid()];
            self::saveBasket();
        } else {
            self::$basket = unserialize(base64_decode($_COOKIE['basket']));
            self::$count = count(self::$basket)-1;
        }
    }
}