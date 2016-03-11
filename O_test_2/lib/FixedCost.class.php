<?php
class FixedCost extends CostSummary {
    public function cost( Lesson $lesson ) {
        return ($lesson->getDuration() * 200);
    }

    public function chargeType() {
        return "Fixed payment";
    }
}