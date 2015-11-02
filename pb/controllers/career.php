<?php
class Career extends Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->view->msg = "Здесь оставлять свои резюме";
        $this->view->render('career/index');
    }
    public function addResume(){
        $data = array();
        $data['name'] = $_POST['name'];
        $data['surname'] = md5($_POST['surname']);
        $data['role'] = $_POST['role'];
        $this->model->addResume($data);
        header('Location: '. URL . 'career');
    }
}