<?php
class Basket_Model extends Model {
    public $basket;
    public function __construct() {
        parent::__construct();
    }

    public function add2Basket($id) {
        $basket[$id] = 1;
        Cart::saveBasket();
    }
}