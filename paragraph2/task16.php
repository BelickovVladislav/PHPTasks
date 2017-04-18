<?php
/*
 * В  массиве  А(N)  определить  максимальную  длину последовательности равных элементов.
 */
function maxLength(array $array)
{
    $countMax = 0;
    for ($i = 0; $i < count($array); $i++) {
        $count = 0;
        while ($array[$i] == $array[($i + $count) % count($array)] && $i + $count < count($array)) $count++;
        if ($count > $countMax)
            $countMax = $count;
    }
    return $countMax;
}

$array = array(4, 92, 4, 8, 23, 13, 81, -15, 1, 1, 1, 1, 31, 292, -4, 54, 91, 5, 5, 5, 5, 5, 5, 5);
echo maxLength($array);
?>