<?php
class Catalog_Model extends Model{
    public function __construct() {
        parent::__construct();
    }

    public function selectAllItems() {
        $sth = $this->database->prepare('SELECT id, title, author, pubyear, price FROM catalog');
        $sth->execute();
        if(!$sth){
            return false;
        }
        $items = $sth->fetchAll();
        return $items;
    }
}