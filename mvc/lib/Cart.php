<?php
class Cart {
    public static function saveBasket() {
        global $basket;
        $basket = base64_encode(serialize($basket));
        setcookie('basket', $basket, 0x7FFFFFFF);
    }

    public static function basketInit() {
        global $basket, $count;
        if(!isset($_COOKIE['basket'])) {
            $basket = ['orderid' => uniqid()];
            self::saveBasket();
        } else {
            $basket = unserialize(base64_decode($_COOKIE['basket']));
            $count = count($basket)-1;
        }
    }
}