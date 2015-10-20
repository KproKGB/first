<?php
class Dashboard_model extends Model {
    function __construct() {
        parent::__construct();
    }

    function xhrInsert() {
        $text = $_POST['text'];
        $sth = $this->database->prepare('INSERT INTO data(text) VALUES (:text)');
        $sth->execute(array(':text' => $text));
    }

    public function xhrGetListings() {
        $sth = $this->database->prepare('SELECT * FROM data');
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        $data = $sth->fetchAll();
        echo json_encode($data);
    }
}