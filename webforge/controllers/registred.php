<?php
class Registred extends Controller {
	public function __construct() {
		parent::__construct();
	}
	public function index() {
		$this->view->render('registred/index');
	}

	protected function errorHeader () {
		header('Location: '. URL . 'registred');
		return false;
	}

	public function addUser() {
		$data = array();
		if (preg_match('/^[a-zA-Z0-9_]{1,15}$/ui', $_POST['login'])) {
			$data['login'] = $_POST['login'];
		} else {
			$this->errorHeader();
		}

		if ($_POST['pass'] === $_POST['pass2']) {
			$data['pass'] = md5($_POST['pass']);
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

		$blacklist = array (".php", ".phtml", ".php3", ".php4", ".html", ".htm");
		foreach($blacklist as $item) {
			if(preg_match("/$item\$/i", $_FILES['photo']['name'])) {
				$this->errorHeader();
			}
		}
		$type = $_FILES['photo']['type'];
		$size = $_FILES['photo']['size'];
		if (($type != "image/jpg") && ($type != "image/jpeg") && ($type != "image/gif") && ($type != "image/png")) {
			$this->errorHeader();
		}
		if ($size > 204800) {
			$this->errorHeader();
		}
		$data['photo'] = 'public/upload/' . $_FILES['photo']['name'];
		//$data['cvv'] = iconv('utf-8','cp1251', $data['cvv']);  //Для Windows

		$this->model->addUser($data);
		header('Location: '. URL . 'login');
	}
}