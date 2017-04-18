<?php
/*
 * В массиве А(N) найти последний четный положительный элемент,
 * кратный заданному числу р, заменить его индексом и поставить в  конец  массива.
 */
function swap(array &$array, $indexFirst, $indexSecond)
{
    $array[$indexFirst] += $array[$indexSecond];
    $array[$indexSecond] = $array[$indexFirst] - $array[$indexSecond];
    $array[$indexFirst] -= $array[$indexSecond];
}

$index = 0;
$array = array(4, 92, 4, 8, 23, 13, 81, -15, 1, 1, 1, 1, 31, 292, -4, 54, 91, 5, 5, 5, 5, 5, 5, 5);
$p = 3;
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] % 2 == 0 && $array[$i] % $p == 0)
        $index = $i;

}
$array[$index] = $index;
swap($array, $index, count($array) - 1);
echo join(" ", $array);
