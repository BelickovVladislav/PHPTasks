<?php
/*
 * ����������, �������� �� �����  2^n + m  ������������,
 * �. �. ������  ����� �������� ������ ���������� ���� � ��������� ��� ����� � ������  ���������.
 */
function getCountBitNumber($number)
{
    $count = 0;
    while ($number != 0) {
        $count++;
        $number = (int)($number / 10);
    }
    return $count;
}

function reverse($number)
{
    $m = 0;
    while ($number != 0) {
        $m *= 10;
        $m += $number % 10;
        $number = (int)($number / 10);
    }
    return $m;
}

function isSymmetric($number)
{
    $countBit = getCountBitNumber($number);
    if ($countBit % 2 == 0) {
        $countBit = (int)($countBit / 2);
        $count = 0;
        $number2 = 0;
        while ($count < $countBit) {
            $number2 *= 10;
            $number2 += $number % 10;
            $number = (int)($number / 10);
            $count++;
        }
        while (getCountBitNumber($number) > getCountBitNumber($number2))
            $number = (int)($number / 10);
        return $number == reverse($number2);
    }
    return false;
}

$n = 12;
$m = -56;
$number = 1;
for ($i = 0; $i < $n; $i++) {
    $number *= 2;
}
$number += $m;
echo "����� $number " . (isSymmetric($number) ? "" : "�� ") . "�������� ������������.";

?>