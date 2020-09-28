<?php

namespace App\Basics\Challenges\IsHappy;

/*"Счастливым" называют билет с номером, в котором сумма первой половины цифр
равна сумме второй половины цифр. Номера могут быть произвольной длины,
с единственным условием, что количество цифр всегда чётно,
например: 33 или 2341 и так далее.*/

/*function isHappy($ticket)
{
    $leftSum = 0;
    $rightSum = 0;

    $center = strlen($ticket) / 2;
    for ($i = 0; $i < $center; $i++) {
        $left = $i;
        $right = $center + $i;

        $leftSum += $ticket[$left];
        $rightSum += $ticket[$right];
    }

    return $leftSum === $rightSum;
}*/

function isHappy($ticket)
{
    $balance = 0;
    for ($i = 0, $j = strlen($ticket) - 1; $i < $j; $i++, $j--) {
        $balance  += $ticket[$i] - $ticket[$j];
    }

    return $balance === 0;
}
