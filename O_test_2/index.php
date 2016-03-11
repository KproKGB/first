<?php
require 'lib/Lesson.class.php';
require 'lib/Cost.class.php';
function __autoload($class_name) {
    require_once 'lib/' . $class_name . '.class.php';
}
$all_price = 0;
$lessons[] = new Grammar( 1, new TimedCost() );
$lessons[] = new Speaking( 1, new FixedCost() );

foreach ( $lessons as $lesson ) {
    $all_price += $lesson->cost();
    print "Payment per lesson <b>{$lesson->cost()} \$</b>. ";
    print "Payment type: {$lesson->chargeType()}<br>";
}
print "All price <b>{$all_price} \$</b>. ";