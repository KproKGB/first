<?php
class Help extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        echo "Мы в контроллере Help<br>";
        $this->view->render('help/index');
    }
    public function other($arg = false) {
        echo "Мы в методе other контроллера Help<br>";
        if($arg) {
            echo "Параметры: $arg <br>";
        }
        /*require_once 'models/help_model.php';
        $model = new Help_Model();*/
        $this->view->render('help/index');
    }
}