<?php
class Admin_Model extends Model{
    public function _construct() {
        parent::__construct();
    }

    public function addItemToCatalog($data) {
        $sth = $this->database->prepare('INSERT INTO catalog (title, author, pubyear, price) VALUES (:title, :author, :pubyear, :price)');
        $sth->execute(array(':title' => $data['title'], ':author' => $data['author'], ':pubyear' => $data['pubyear'], 'price' => $data['price']));
    }
}