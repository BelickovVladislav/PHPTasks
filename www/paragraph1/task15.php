<?php
/*
 * ���������� ���������� ��������� ��������� ������ ����� N.
 */
function getCountDiv($number)
{
    $count = 0;
    for ($i = 1; $i < (int)($number / 2) + 1; $i++)
        if ($number % $i == 0)
            $count++;
    return $count + 1;
}

$number = 10;
echo "���������� ��������� ����� $number ����� " . getCountDiv($number);