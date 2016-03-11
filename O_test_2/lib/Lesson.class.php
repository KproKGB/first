<?php

abstract class Lesson {
    public $duration;
    public $costSummary;

    public function __construct($duration, CostSummary $set_cost) {
        $this->duration = $duration;
        $this->costSummary = $set_cost;
    }

    public function cost() {
        return $this->costSummary->cost($this);
    }

    public function chargeType() {
        return $this->costSummary->chargeType();
    }

    public function getDuration() {
        return $this->duration;
    }

    public function getName(){
        return $this;
    }
}