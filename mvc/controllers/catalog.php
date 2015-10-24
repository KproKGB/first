<?php
class Catalog extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->view->selectAllItems = $this->model->selectAllItems();
        $this->view->render('catalog/index');
    }
}