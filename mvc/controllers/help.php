<?php
class Help extends Controller {
    public function __construct() {
        parent::__construct();
        echo "Мы в контроллере Help<br>";
    }

    public function other($arg = false) {
        echo "Мы в методе other контроллера Help<br>";
        echo "Параметры: $arg";
    }
}