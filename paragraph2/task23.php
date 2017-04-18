<?php
/*
 * В массиве А(N) найти минимальное из чисел, встречающихся более одного раза.
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
$indexMin = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] < $array[$indexMin] && getCountElement($array, $array[$i]) > 1) {
        $indexMin = $i;
    }
}
echo $array[$indexMin];
?>