<?php
/*
 * ����  �����������  �����  N.  ����������,  ��������  ��  ���  �����������.
 * ����������� �����  ����� ��������� �������� �������� ����� �����.
 * ��������,  5 � 25,  6 � 36,  25 � 625.
 */
function getBitNumber($number)
{
    $bit = 1;
    while ($number != 0) {
        $bit *= 10;
        $number = (int)($number / 10);
    }
    return $bit;
}

function isAutomorphicNumber($number)
{
    return ($number * $number) % getBitNumber($number) == $number;
}

$number = 625;
echo "����� $number " . (isAutomorphicNumber($number) ? "" : "�� ") . "�������� �����������.";
?>