<?php
class Basket extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        //$this->view->method = $this->model->method();
        $this->view->render('basket/index');
    }
}