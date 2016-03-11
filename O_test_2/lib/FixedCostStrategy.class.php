<?php
class FixedCostStrategy extends CostSummary {
    function cost( Lesson $lesson ) {
        return ($lesson->getDuration() * 200);
    }

    function chargeType() {
        return "Fixed rate";
    }
}