<?php
require 'lib/Lesson.class.php';
require 'lib/Cost.class.php';
function __autoload($class_name) {
    require_once 'lib/' . $class_name . '.class.php';
}
$all_price = 0;
$lessons[] = new Grammar( 1, new TimedCost() );
$lessons[] = new Speaking( 2, new FixedCost() );
$lessons[] = new Speaking( 3, new TimedCost() );
$lessons[] = new Grammar( 4, new FixedCost() );

foreach ( $lessons as $lesson ) {
    $all_price += $lesson->cost();
    print "Payment per lesson <b>{$lesson->cost()} \$</b>. ";
    print "Payment type: {$lesson->chargeType()}<br>";
}
print "All price <b>{$all_price} \$</b>. ";