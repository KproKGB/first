<?php
/* Дано: ассоциативный массив. Написать функцию arrayReverseKeys($a), которая перевернет ключи этого массива,
 используя минимальное количество циклов. Функция должна возвращать массив как результат.
Пример:
$a = array( ‘a’ => ‘apple’, ‘b’ => ‘banana’, ‘c’ => ‘cherry’);
Результат — ключи идут в обратном порядке:
$a = array( ‘c’ => ‘apple’, ‘b’ => ‘banana’, ‘a’ => ‘cherry’);
 */
$a = array( 'a' => 'apple', 'b' => 'banana', 'c' => 'cherry');

function arrayReverseKeys($a){
    return array_reverse($a);
}

var_dump(arrayReverseKeys($a));
