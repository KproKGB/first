<?php
/* Дано массив целых чисел $a, отсортированный по возрастанию, и некое число $b.
Написать функцию searchInArray($a, $b), которая максимально быстро определит,
есть ли в массиве искомый элемент и вернет TRUE или FALSE.
Не стоит использовать in_array или array_search */

function searchInArray($a, $b){
    if ($b > $a[count($a)-1] or $b < $a[0])
        return false;
    else
        return true;
}