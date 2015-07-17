<?php
class Help extends Controller {
    public function __construct() {
        parent::__construct();
        echo "Мы в контроллере HELP<br/>";
        $this->view->msg = "HELP!!";
        $this->view->render('help/index');
    }

    public function other($arg = false) {
        echo "Мы в методе other контроллера Help<br/>";
        echo "Параметры: " . $arg . "<br/>";
        require 'models/help_model.php';
        $model = new Help_Model();
    }
}
