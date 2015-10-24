<?php
class Admin extends Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->render('admin/index');
    }

    public  function add2cat(){
        $this->view->render('admin/add2cat');
    }

    public function addItemToCatalog() {
        $data = array();
        $data['title'] = $_POST['title'];
        $data['author'] = $_POST['author'];
        $data['pubyear'] = $_POST['pubyear'];
        $data['price'] = $_POST['price'];
        $this->model->addItemToCatalog($data);
        header('Location: ' . URL . '/admin/add2cat');
    }
}