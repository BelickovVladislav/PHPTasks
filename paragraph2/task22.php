<?php
/*
 * В массиве А(N) найти максимальный из элементов, встречающихся только один раз.
 */
function getCountElement($array, $element)
{
    $count = 0;
    for ($i = 0; $i < count($array); $i++)
        if ($array[$i] == $element)
            $count++;
    return $count;
}

$array = array(4, 92, 4, 8, 23, 13, 81, -15, 1, 1, 1, 1, 31, 292, -4, 54, 91, 5, 5, 5, 5, 5, 5, 5);
$indexMax = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > $array[$indexMax] && getCountElement($array, $array[$i]) == 1) {
        $indexMax = $i;
    }
}
echo $array[$indexMax];