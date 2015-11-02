<?php
class Career_Model extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function addResume($data) {
        $sth = $this->database->prepare('INSERT INTO career (name, surname, role) VALUES (:name, :surname, :role)');
        $sth->execute(array(':name' => $data['name'], ':surname' => $data['surname'], ':role' => $data['role']));
    }
}