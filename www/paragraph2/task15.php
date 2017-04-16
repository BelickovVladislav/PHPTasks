<?php
/*
 * Определить,    есть  ли  среди  элементов  массива  А(N)  последовательность из k элементов, равных числу х.
 */
function contains(array $array, $k, $x)
{
    for ($i = 0; $i <= count($array) - $k; $i++) {
        $flag = true;
        for ($j = $i; $j < $i + $k; $j++) {
            if ($array[$j] != $x) {
                $flag = false;
                break;
            }
        }
        if ($flag)
            return true;
    }
    return false;
}

$array = array(4, 92, 4, 8, 23, 13, 81, -15, 1, 1, 1, 1, 31, 292, -4, 54, 91,);
var_dump(contains($array, 4, 1));
?>