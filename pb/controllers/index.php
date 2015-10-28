<?php
class Index extends Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->view->msg = 'Главная Страница!';
        $this->view->render('index/index');
    }
}