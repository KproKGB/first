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
        $this->view->render('career/addResume');
    }
}