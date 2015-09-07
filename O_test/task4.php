<?php
/*Написать свой вариант функции strrev(), не используя стандартные функции, вроде strrev()
Пример:
Дано $s=‘Hello!’;
Функция myStrRev($s) возвращает ‘!olleH’ */

function myStrRev($s, $encoding = null) {
    if ($encoding === null) {
        $encoding = mb_detect_encoding($s);
    }
    $length   = mb_strlen($s, $encoding);
    $reversed = '';
    while ($length-- > 0) {
        $reversed .= mb_substr($s, $length, 1, $encoding);
    }
    return $reversed;
}

$s="Привет!";

print_r(myStrRev($s));

