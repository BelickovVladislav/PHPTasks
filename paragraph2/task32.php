<?php
/*
 * В массиве А(N) расположить все четные элементы в порядке возрастания, а нечетные в порядке убывания.
 */
function swap(array &$array, $indexFirst, $indexSecond)
{
    $array[$indexFirst] += $array[$indexSecond];
    $array[$indexSecond] = $array[$indexFirst] - $array[$indexSecond];
    $array[$indexFirst] -= $array[$indexSecond];
}

$array = array(4, 92, 4, 8, 23, 13, 81, -15, 1, 1, 1, 1, 31, 292, -4, 54, 91, 5, 5, 5, 5, 5, 5, 5);
for ($i = 0; $i < count($array); $i++) {
    for ($j = $i; $j < count($array); $j++) {
        if ($array[$i] % 2 == 0 && $array[$j] % 2 == 0) {
            if ($array[$i] > $array[$j]) {
                swap($array, $i, $j);
            }
        }
        if ($array[$i] % 2 != 0 && $array[$j] % 2 != 0) {
            if ($array[$i] < $array[$j]) {
                swap($array, $i, $j);
            }
        }
    }
}
echo join(" ", $array);