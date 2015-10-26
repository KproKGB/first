<?php
class Basket extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        //$this->view->add2Basket = $this->model->add2Basket($id);
        $this->view->render('basket/index');
    }
    public function add2Basket($id) {
        $this->model->add2Basket($id);
        header('Location: '. URL . '/catalog');
    }
}