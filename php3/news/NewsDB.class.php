<?php
require_once "INewsDB.class.php";
class NewsDB implements INewsDB {
    const DB_NAME = "news.db";
    private $_db;

    function __construct() {
        $this->_db = new SQLite3(self::DB_NAME);
    }

    function __get($name) {
        if($name == "db") {
            return $this->_db;
        }
        throw new Exception ("Unknown property!");
    }

    function saveNews($title, $category, $description, $source) {

    }

    function getNews() {

    }

    function deleteNews($id){

    }

    function __destruct() {
        unset($this->_db);
    }
}

$news = new NewsDB();
