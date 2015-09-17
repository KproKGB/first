<?php
/* Дано массив целых чисел $a, отсортированный по возрастанию, и некое число $b.
Написать функцию searchInArray($a, $b), которая максимально быстро определит,
есть ли в массиве искомый элемент и вернет TRUE или FALSE.
Не стоит использовать in_array или array_search */

$a = array(102, 103, 105, 107, 108, 109, 110);
$b = 107;

function searchInArray($a, $b) {
    $s = 0;
    $e = count($a)-1;
    while($s < $e) {
        $m = intval(($s + $e) / 2);
        if($a[$m] == $b) {
            return $a[$m] == $b;
        } elseif ($a[$m] < $b) {
            $s = $m + 1;
        } else {
            $e = $m;
        }
    }
    return $a[$e]==$b;
}

var_dump(searchInArray($a, $b));