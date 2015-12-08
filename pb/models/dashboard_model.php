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

    public function userCvv($id){
        $sth = $this->database->prepare('SELECT id, name, surname, phone, email, video, role, cvv, workt, date FROM career WHERE id = :id');
        $sth->execute(array(':id' => $id));
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $fetch = $sth->fetchAll();
        return $fetch;
    }

    public function deleteCvv($id) {
        $sth = $this->database->prepare('DELETE FROM career WHERE id = :id');
        $sth->execute(array(':id' => $id));
    }
}