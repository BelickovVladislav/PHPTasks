<?php
/*
 * В массиве А(N) первый положительный элемент и последний отрицательный элемент переставить местами.
 */

$array = array(4, 92, 4, 8, 23, 13, 81, -4, 31, 292, -15, 54, 91);
$indexPositive = 0;
$indexNegative = count($array) - 1;
for ($i = 0; $i < count($array) && $array[$indexPositive] <= 0; $i++)
    $indexPositive = $i;
for ($i = count($array) - 1; $i >= 0 && $array[$indexNegative] >= 0; $i--)
    $indexNegative = $i;

$array[$indexPositive] += $array[$indexNegative];
$array[$indexNegative] = $array[$indexPositive] - $array[$indexNegative];
$array[$indexPositive] -= $array[$indexNegative];

echo join(" ", $array);