<?php
require 'lib/Lesson.class.php';
require 'lib/Cost.class.php';
function __autoload($class_name) {
    require_once 'lib/' . $class_name . '.class.php';
}

$lessons[] = new Grammar( 15, new TimedCostStrategy() );
$lessons[] = new Speaking( 4, new FixedCostStrategy() );

foreach ( $lessons as $lesson ) {
    print "Payment per lesson <b>{$lesson->cost()} \$</b>. ";
    print "Payment type: {$lesson->chargeType()}<br>";
}
