<?php
/*
 * Вычислить значение многочлена и всех его производных в заданной точке x (коэффициенты хранятся в массивах ).
 */
function powNumber($number, $p)
{
    $num = $number;
    if ($p == 0)
        return 1;
    for ($i = 1; $i < $p; $i++)
        $number *= $num;
    return (int)$number;
}

function getValuePolynomial(array $array, $x)
{
    $result = 0;
    for ($i = 0; $i < count($array); $i++) {
        $result += (int)($array[$i] * powNumber($x, count($array) - 1 - $i));
    }
    return $result;
}

function getDerivativePolynomial(array $array, $x)
{
    $result = 0;
    for ($i = 0; $i < count($array); $i++) {
        $mul = count($array) - 1 - $i;
        $result += (int)($array[$i] * $mul * powNumber($x, $mul - 1));
    }
    return $result;
}

function showAllDerivativePolynomial(array $array, $x)
{
    if (empty($array))
        return;
    echo getDerivativePolynomial($array, $x).'<br>';
    $arr = array();
    for ($i = 0; $i < count($array) - 1; $i++) {
        $arr[$i] = (int)($array[$i] * powNumber($x, count($array) - 1 - $i));
    }
    showAllDerivativePolynomial($arr, $x);
}

$array = array(5, 4, 2);
$x = 2;
showAllDerivativePolynomial($array, $x);