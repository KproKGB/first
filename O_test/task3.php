<?php
/* Дано: ассоциативный массив. Написать функцию arrayReverseKeys($a), которая перевернет ключи этого массива,
 используя минимальное количество циклов. Функция должна возвращать массив как результат.
Пример:
$a = array( ‘a’ => ‘apple’, ‘b’ => ‘banana’, ‘c’ => ‘cherry’);
Результат — ключи идут в обратном порядке:
$a = array( ‘c’ => ‘apple’, ‘b’ => ‘banana’, ‘a’ => ‘cherry’);
 */

function arrayReverseKeys($a) {
    return array_combine(array_reverse(array_keys($a)), array_values($a));
}

$a = array('a' => 'apple', 'b' => 'banana', 'c' => 'cherry');
print_r(arrayReverseKeys($a));