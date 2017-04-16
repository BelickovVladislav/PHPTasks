<?php
/*
 * Дан массив А(N).
 * Получить массив В(N), i-элемент которого равен  среднему арифметическому первых i элементов массива  А.
 */
function getAverage($index, array $array)
{
    $sum = 0;
    for ($i = 0; $i <= $index; $i++) {
        $sum += $array[$i];
    }
    return (int)($sum / ($index + 1));
}

$array = array(4, 92, 4, 8, 23, 13, 81, -4, 31, 292, -15, 54, 91);
$b = array();
for ($i = 0; $i < count($array); $i++) {
    $b[] = getAverage($i, $array);
}
echo join(" ", $b);