<?php
class Registred extends Controller {
	public function __construct() {
		parent::__construct();
	}
	public function index() {
		$this->view->render('registred/index');
	}
	public function addUser() {
		die ("1");
	}
}