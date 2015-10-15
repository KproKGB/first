<?php
class Error extends Controller {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        echo "Мы в контроллере ошибок! <br> ";
        $this->view->msg = 'Страницы не существует!';
        $this->view->render('error/index');
    }
}