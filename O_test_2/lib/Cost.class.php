<?php

abstract class CostSummary {
    abstract public function cost( Lesson $lesson );
    abstract public function chargeType();
}
