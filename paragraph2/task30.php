<?php
/*
 * Вычислить  значение  многочлена  и  его  первой  производной  в  заданной точке x (коэффициенты хранятся в массивах).
 */
function powNumber($number, $p)
{
    if($p == 0)
        return 1;
    for ($i = 1; $i < $p; $i++)
        $number *= $number;
    return $number;
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
        $result += (int)($array[$i] * $mul * powNumber($x, $mul-1));
    }
    return $result;
}

$array = array(5, 4, 2);
$x = 2;
echo getValuePolynomial($array, $x)."<br>";
echo getDerivativePolynomial($array, $x);