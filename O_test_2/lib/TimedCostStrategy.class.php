<?php
class TimedCostStrategy extends CostSummary {
    public function cost(Lesson $lesson) {
        return ($lesson->getDuration() * 100);
    }
    public function chargeType() {
        return "Hourly payment";
    }
}