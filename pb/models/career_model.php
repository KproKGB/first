<?php
class Career_Model extends Model {
    public function __construct() {
        parent::__construct();
    }
    public function addResume($data) {
		move_uploaded_file($_FILES['cvv']['tmp_name'], $data['cvv']);
		$sth = $this->database->prepare('INSERT INTO career (name, surname, email, phone, video, cvv, role, workt)
                                        VALUES (:name, :surname, :email, :phone, :video, :cvv, :role, :workt)');
		$sth->execute(array(':name' => $data['name'], ':surname' => $data['surname'], ':role' => $data['role'],
            ':email' => $data['email'], ':phone' => $data['phone'], ':cvv' => $data['cvv'], ':video' => $data['video'],
            ':workt' => $data['workt']));
	}
}