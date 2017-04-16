<?php
/*
 * В массив А(N) вставить после первого максимального элемента  k   минимальных элементов массива.
 */
function swap(array &$array, $indexFirst, $indexSecond)
{
    $array[$indexFirst] += $array[$indexSecond];
    $array[$indexSecond] = $array[$indexFirst] - $array[$indexSecond];
    $array[$indexFirst] -= $array[$indexSecond];
}

function paste(array &$array, $element, $index)
{
    $array[] = $element;
    $indexElement = count($array) - 1;
    while ($indexElement != $index + 1) {
        swap($array, $indexElement, --$indexElement);
    }
}

$array = array(4, 92, 4, 8, 23, 13, 81, -15, 1, 1, 1, 1, 31, 292, -4, 54, 91, 5, 5, 5, 5, 5, 5, 5);
$max = $array[0];
$min = $array[0];
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > $max) {
        $max = $array[$i];
    }
    if ($array[$i] < $min)
        $min = $array[$i];
}
$indexMax = 0;
for ($i = 0; $i < count($array); $i++)
    if ($array[$i] == $max) {
        $indexMax = $i;
    }
$k = 5;
for ($i = 0; $i < $k; $i++)
    paste($array, $min, $indexMax);
echo join(" ", $array);