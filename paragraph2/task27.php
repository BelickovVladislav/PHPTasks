<?php
/*
 * В  массив  А(N),  упорядоченный  по  возрастанию,  вставить   k  элементов, не нарушая его последовательности.
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

$array = array(4, 5, 8, 10, 11, 23, 43, 44, 45, 48);
$element = 6;
$k = 14;
$index = 0;
while (!($array[$index] <= $element && $array[$index + 1] > $element) && $index < count($array) - 1)
    $index++;
for ($i = 0; $i < $k; $i++)
    paste($array, $element, $index);
echo join(" ", $array);