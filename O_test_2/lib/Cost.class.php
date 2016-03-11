<?php

abstract class CostSummary {
    abstract function cost( Lesson $lesson );
    abstract function chargeType();
}
