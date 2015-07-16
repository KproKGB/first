<?php
class Controller {
    public function __construct() {
        header('Content-Type: text/html; charset=utf-8');
        echo "Это главный контроллер<br/>";
        $this->view = new View();
    }
}
