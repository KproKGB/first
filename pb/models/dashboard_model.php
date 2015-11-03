<?php
class Dashboard_model extends Model {
    function __construct() {
        parent::__construct();
    }
    public function userList(){
        $sth = $this->database->prepare('SELECT id, name, surname, date FROM career');
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $fetch = $sth->fetchAll();
        return $fetch;
    }
}