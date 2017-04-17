<?php
/*
 * В  массив  А(N)  вставить  максимальный  элемент  после  каждого  четного отрицательного элемента.
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
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > $max) {
        $max = $array[$i];
    }
}
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] < 0 && $array[$i] % 2 == 0) {
        paste($array, $max, $i);
    }
}
echo join(" ", $array);