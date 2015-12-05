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
        if (preg_match('/^[а-яА-Яa-zA-Z]{1,15}$/ui', $_POST['surname'])) {
            $data['surname'] = $_POST['surname'];
        } else {
            header('Location: '. URL . 'career');
            return false;
        }

        if (preg_match('/^[а-яА-Яa-zA-Z]{1,15}$/ui', $_POST['name'])) {
            $data['name'] = $_POST['name'];
        } else {
            header('Location: '. URL . 'career');
            return false;
        }

        if (preg_match('/^\+38\s\([0-9]{3}\)\s[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            $data['phone'] = $_POST['phone'];
        } else {
            header('Location: '. URL . 'career');
            return false;
        }

        if (preg_match('/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/', $_POST['email'])) {
			$data['email'] = $_POST['email'];
		} else {
			header('Location: '. URL . 'career');
			return false;
		}

        if ($_POST['role']== 'cvv') {
			$data['role'] = $_POST['role'];
		} else {
			header('Location: '. URL . 'career');
			return false;
		}
        $data['workt'] = $_POST['workt'];
        $data['cvv'] = $_POST['cvv'];
        $data['video'] = $_POST['video'];
        $this->model->addResume($data);
        header('Location: '. URL . 'career');
    }
}