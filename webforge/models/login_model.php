<?php
class Login_Model extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function run() {
        $sth = $this->database->prepare("SELECT id, login  FROM users WHERE login = :login AND pass = MD5(:pass)");
        $sth->execute(array(':login' => $_POST['login'], ':pass' => $_POST['password']));
        $data = $sth->fetch();
        $count = $sth->rowCount();
        if($count > 0) {
            Session::init();
            Session::set('loggedIn', true);
            header('Location: ../dashboard/user/' . $data['login']);
        } else {
            header('Location: ../login');
        }
    }
}