<?php
/*Написать свой вариант функции strrev(), не используя стандартные функции, вроде strrev()
Пример:
Дано $s=‘Hello!’;
Функция myStrRev($s) возвращает ‘!olleH’ */

function myStrRev($s) {
    $str = "";
    for($i = strlen($s)-1; $i >= 0; $i--) {
        $str.= $s[$i];
    }
    return $str;
}

$s="Hello!";

print_r(myStrRev($s));