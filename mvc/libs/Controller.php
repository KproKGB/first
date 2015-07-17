<?php
class Controller {
    public function __construct() {
        echo "Это главный контроллер<br/>";
        $this->view = new View();
    }
}
