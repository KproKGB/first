<?php
class User_Model extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function userList() {
        $sth = $this->database->prepare('SELECT id, login, role FROM users');
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $fetch = $sth->fetchAll();
        return $fetch;
    }

    public function create($data) {
        $sth = $this->database->prepare('INSERT INTO users (login, password, role) VALUES (:login, :password, :role)');
        $sth->execute(array(':login' => $data['login'], ':password' => $data['password'], ':role' => $data['role']));
    }

    public function delete($id) {
        $sth = $this->database->prepare('DELETE FROM users WHERE id = :id');
        $sth->execute(array(':id' => $id));
    }

    public function userSingleList($id) {
        $sth = $this->database->prepare('SELECT id, login, role FROM users WHERE id = :id');
        $sth->execute(array(':id' => $id));
        return $sth->fetch();
    }

    public function editSave($data) {
        $sth = $this->database->prepare('UPDATE users SET `login` = :login, `password` = :password, `role` = :role WHERE id = :id');
        $sth->execute(array(':login' => $data['login'], ':password' => $data['password'], ':role' => $data['role'], ':id' => $data['id']));
    }


}