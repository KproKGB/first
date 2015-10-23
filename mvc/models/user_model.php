<?php
class User_Model extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function userList() {
        $sth = $this->database->prepare('SELECT id, login, role FROM users');
        $sth->execute();
        $sth->fetchAll();
        return $sth->fetchAll();
    }

    public function create($data) {
        $sth = $this->database->prepare('INSERT INTO users (`login`, `password`, `role`) VALUES (:login, :password, :role)');
        $sth->execute(array(':login' => $data['login'], ':password' => $data['password'], ':role' => $data['role']));
    }
}