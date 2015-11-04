<?php
class Dashboard extends Controller {
    public function __construct () {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if($logged == false) {
            Session::destroy();
            header('Location: login');
            exit();
        }
    }
    public function index() {
        $this->view->userList = $this->model->userList();
        $this->view->render('dashboard/index');
    }

    public function userCvv($id) {
        $this->view->msg = "Резюме чувака";
        $this->view->userCvv = $this->model->userCvv($id);
        $this->view->render('dashboard/view');
    }

    public function deleteCvv($id) {
        $this->model->deleteCvv($id);
        header('Location: ' . URL . 'dashboard');
    }

    public function logout() {
        Session::destroy();
        header('Location: ' . URL . 'index');
        exit();
    }
}