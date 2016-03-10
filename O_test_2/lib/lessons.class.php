<?php

abstract class Lessons {

    public $duration; //dlitel'nost'
    public $hour = 0;
    public $rate_hour = 100; //tarif pochasovoj
    public $rate_less = 200; //tarif za zanyatie

    abstract public function getPrice();

}
