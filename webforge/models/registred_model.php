<?php
class Registred_model extends Model {
	public function __construct()
	{
		parent::__construct();
	}

	public function addUser($data) {
		$sth = $this->database->prepare('INSERT INTO users (login, pass, email, phone, photo, name)
                                        VALUES (:login, :pass, :email, :phone, :photo, :name)');
		$sth->execute(array(':name' => $data['name'], ':login' => $data['login'], ':pass' => $data['pass'],
			':email' => $data['email'], ':phone' => $data['phone'], ':photo' => $data['photo']));

		move_uploaded_file($_FILES['photo']['tmp_name'], $data['photo']);
	}
}