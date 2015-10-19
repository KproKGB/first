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
}