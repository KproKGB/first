<?php
class Career extends Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->view->render('career/index');
    }
    public function addResume(){
        $data = array();
        $data['surname'] = $_POST['surname'];
        $data['name'] = $_POST['name'];
        $data['phone'] = $_POST['phone'];
        $data['email'] = $_POST['email'];
        $data['role'] = $_POST['role'];
        $data['workt'] = $_POST['workt'];
        $data['cvv'] = $_POST['cvv'];
        $data['video'] = $_POST['video'];
        $this->model->addResume($data);
        header('Location: '. URL . 'career');
    }


}