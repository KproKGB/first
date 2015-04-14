<?php
$z = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
$p = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
$c = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0);
$b = array();
$result= '';
$s = 0;
$l = 0;

function arrMer($arr1, $arr2, $arr3){
    $res = array_merge($arr1, $arr2, $arr3);
    return $res;
}

function countArr ($arr){
    $count = count ($arr);
    return $count;
}

?>