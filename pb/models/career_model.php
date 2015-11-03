<?php
class Career_Model extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function addResume($data) {
        $sth = $this->database->prepare('INSERT INTO career (name, surname, email, phone, cvv, video, role, text)
                                        VALUES (:name, :surname, :email, :phone, :cvv, :video, :role, :text)');
        $sth->execute(array(':name' => $data['name'], ':surname' => $data['surname'], ':role' => $data['role'],
            ':email' => $data['email'], ':phone' => $data['phone'], ':cvv' => $data['cvv'], ':video' => $data['video'], ':text' => $data['text']));
    }
}