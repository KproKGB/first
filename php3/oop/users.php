<?php
class User {
    public $name;
    public $login;
    public $password;


    function drawLine(){
        echo "<hr>";
    }

    function showInfo(){
        echo $this->name."<br/>";
        echo $this->login."<br/>";
        echo $this->password."<br/>";
        $this->drawLine();
    }
}
$user1 = new User();
$user2 = new User();
$user3 = new User();
$user1->name = "Vasya";
$user2->name = "Petya";
$user3->name = "Vanya";
$user1->password = "123321";
$user2->password = "12344321";
$user3->password = "1234554321";
$user1->login = "VS";
$user2->login = "PT";
$user3->login = "VN";

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();
