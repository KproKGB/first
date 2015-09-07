<?php
/* Дано: выражение вида [5] * 3 - ( 4 - 7 * [3-6]).
Написать функцию checkBrackets($s), которая принимает на вход строку с выражением и возвращает TRUE или FALSE.
Если скобки расставлены правильно — TRUE, в противном случае — FALSE.
Пример неправильно расставленых скобок: ( 5 * 3 [ 6 ) - 6] */

function checkBrackets($string) {
    $stack = array();
    $length = strlen($string);
    $bracket = array('(', ')', '[', ']');
    while ($length-- > 0) {
        $n = array_search($string[$length], $bracket);
        if ($n !== false) {
            if ($n % 2) {
                $stack[] = $bracket[$n - 1];
            } elseif ($stack[count($stack) - 1] === $bracket[$n]) {
                array_pop($stack);
            }
        }
    }
    return empty($stack);
}
$str1 = "[5] * 3 - ( 4 - 7 * [3-6])";
$str2 = "( 5 * 3 [ 6 ) - 6]";

var_dump(checkBrackets($str1));
var_dump(checkBrackets($str2));