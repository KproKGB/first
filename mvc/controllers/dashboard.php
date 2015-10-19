<?php
class Dashboard extends Controller {
    public function __construct () {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if($logged == false) {
            Session::destroy();
            header('Location: ../login');
            exit();
        }
        $this->view->js = array('dashboard/js/default.js');
    }
    public function index() {
        $this->view->render('dashboard/index');
    }

    public function logout() {
        Session::destroy();
        header('Location: ../login');
        exit();
    }

    public function xhrInsert() {
        $this->model->xhrInsert();
    }
}