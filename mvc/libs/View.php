<?php
class View {
    public function __construct() {
        echo "Это вид<br/>";
    }

    public function render($name) {
        require 'views/'.$name.'.php';
    }
}