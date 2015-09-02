<?php
/* Дано: выражение вида [5] * 3 - ( 4 - 7 * [3-6]).
Написать функцию checkBrackets($s), которая принимает на вход строку с выражением и возвращает TRUE или FALSE.
Если скобки расставлены правильно — TRUE, в противном случае — FALSE.
Пример неправильно расставленых скобок: ( 5 * 3 [ 6 ) - 6] */

function checkBrackets($str) {
    $stack = array();
    $pairs = array('('=>')', '['=>']');
    $len = strlen($str);
    for($i=0; $i<$len; $i++) {
        $symb = $str[$i];
        if($symb == '(' or $symb == '[') {
            array_push($stack, $symb);
        } elseif($symb == ')' or $symb == ']') {
            $open = array_pop($stack);
            if($pairs[$open] != $symb) {
                return false;
            }
        }
    }
    return (empty($stack));
}

/*function checkBrackets($str) {
    $stack = array();
    $length = strlen($str);
    $bracket = array('(', ')', '[', ']', '{', '}', '<', '>');
    while ($length-- > 0) {
        $n = array_search($str[$length], $bracket);
        if ($n !== false) {
            if ($n % 2) {
                $stack[] = $bracket[$n - 1];
            } elseif ($stack[count($stack) - 1] === $bracket[$n]) {
                array_pop($stack);
            }
        }
    }
    return empty($stack);
}*/