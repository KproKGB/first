<?php
/* Дано: ассоциативный массив. Написать функцию arrayReverseKeys($a), которая перевернет ключи этого массива,
 используя минимальное количество циклов. Функция должна возвращать массив как результат.
Пример:
$a = array( ‘a’ => ‘apple’, ‘b’ => ‘banana’, ‘c’ => ‘cherry’);
Результат — ключи идут в обратном порядке:
$a = array( ‘c’ => ‘apple’, ‘b’ => ‘banana’, ‘a’ => ‘cherry’);
 */

function arrayReverseKeys($a) {
    foreach ($a as $keys => $values) {
        $key [] = $keys;
        $value [] = $values;
    }
    return array_combine((array_reverse($key)), $value);
}