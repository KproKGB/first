<?php

abstract class Lesson {
    public $duration;
    public $costLesson;

    public function __construct($duration, CostSummary $set_cost) {
        $this->duration = $duration;
        $this->costLesson = $set_cost;
    }

    public function cost() {
        return $this->costLesson->cost($this);
    }

    public function chargeType() {
        return $this->costLesson->chargeType();
    }

    public function getDuration() {
        return $this->duration;
    }

    public function getName(){
        return $this;
    }
}