<?php
require 'lib/lessons.class.php';
function __autoload($class_name) {
    require 'lib/' . $class_name . '.class.php';
}
