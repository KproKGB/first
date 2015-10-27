<?php
class Basket_Model extends Model {
    public function __construct() {
        parent::__construct();
    }

    public function add2Basket($id) {
        $basket[$id] = 1;
        $this->saveBasket();
    }

    public function saveBasket($basket) {
        $basket = base64_encode(serialize($basket));
        setcookie('basket', $basket, 0x7FFFFFFF);
    }

    public function basketInit() {
        if(!isset($_COOKIE['basket'])) {
            $basket = ['orderid' => uniqid()];
            $this->saveBasket($basket);
        } else {
            $basket = unserialize(base64_decode($_COOKIE['basket']));
            $count = count($basket)-1;
        }
    }
}