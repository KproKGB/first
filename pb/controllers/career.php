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
        $data['surname'] = $_POST['surname'];
        $data['email'] = $_POST['email'];
        $data['phone'] = $_POST['phone'];
        $data['role'] = $_POST['role'];
        $data['cvv'] = $_POST['cvv'];
        $data['video'] = $_POST['video'];
        $data['text'] = $_POST['text'];
        $this->model->addResume($data);
        header('Location: '. URL . 'career');
    }


}