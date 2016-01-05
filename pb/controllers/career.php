<?php
class Career extends Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->view->render('career/index');
    }
    protected function errorHeader () {
        header('Location: '. URL . 'career');
        return false;
    }
    public function addResume(){
        $data = array();
        if (preg_match('/^[а-яА-Яa-zA-Z]{1,15}$/ui', $_POST['surname'])) {
            $data['surname'] = $_POST['surname'];
        } else {
            $this->errorHeader();
        }

        if (preg_match('/^[а-яА-Яa-zA-Z]{1,15}$/ui', $_POST['name'])) {
            $data['name'] = $_POST['name'];
        } else {
            $this->errorHeader();
        }

        if (preg_match('/^\+38\s\([0-9]{3}\)\s[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            $data['phone'] = $_POST['phone'];
        } else {
            $this->errorHeader();
        }

        if (preg_match('/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/', $_POST['email'])) {
			$data['email'] = $_POST['email'];
		} else {
            $this->errorHeader();
		}

        if ($_POST['role']== 'role') {
			$data['role'] = $_POST['role'];
		} else {
            $this->errorHeader();
		}

        $data['workt'] = $_POST['workt'];

        $blacklist = array (".php", ".phtml", ".php3", ".php4", ".html", ".htm");
		foreach($blacklist as $item) {
			if(preg_match("/$item\$/i", $_FILES['cvv']['name'])) {
                $this->errorHeader();
			}
		}
		$type = $_FILES['cvv']['type'];
		$size = $_FILES['cvv']['size'];
		if (($type != "application/msword") &&
			($type != "application/vnd.openxmlformats-officedocument.wordprocessingml.document"))
		{
            $this->errorHeader();
		}
		if ($size > 204800) {
            $this->errorHeader();
		}
		$data['cvv'] = 'public/files/' . time() . '_' .$_FILES['cvv']['name'];
		//$data['cvv'] = iconv('utf-8','cp1251', $data['cvv']);  //Для Windows

		$data['video'] = $_POST['video'];
        $this->model->addResume($data);
        header('Location: '. URL . 'career');
    }
}