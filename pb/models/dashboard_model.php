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
        $file_cvv = $this->database->prepare('SELECT cvv FROM career WHERE id = :id');
        $file_cvv->execute(array(':id' => $id));
        $file_cvv->setFetchMode(PDO::FETCH_ASSOC);
        $fetch = $file_cvv->fetch();
        unlink($fetch['cvv']);
        $sth = $this->database->prepare('DELETE FROM career WHERE id = :id');
        $sth->execute(array(':id' => $id));
    }
}