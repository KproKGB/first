<?php
/* Дано массив целых чисел $a, отсортированный по возрастанию, и некое число $b.
Написать функцию searchInArray($a, $b), которая максимально быстро определит,
есть ли в массиве искомый элемент и вернет TRUE или FALSE.
Не стоит использовать in_array или array_search */

/*function searchInArray($a, $b) {
    foreach ($a as $value) {
        if ($value == $b) {
            return true;
        }
    }
    return false;
}*/

$a = array(2, 3, 5, 7, 8, 9, 10);
$b = 7;

function searchInArray($a, $b) {
    $s = $a[0];
    $e = count($a)-1;
    while($s < $e) {
        $m = intval(($s + $e) / 2);
        if ($a[$m] < $b) {
            $s = $a[$m] +1;
        } else {
            $e = $m;
        }
    }
    return $a[$e]==$b;
}

var_dump(searchInArray($a, $b));