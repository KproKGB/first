<?php
class Dashboard_model extends Model {
    function __construct() {
        parent::__construct();
    }
    public function userList($login){
        $sth = $this->database->prepare('SELECT id, login, name, email, photo, phone FROM users WHERE login = :login');
        $sth->execute(array(':login' => $login));
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $fetch = $sth->fetchAll();
        return $fetch;
    }
}