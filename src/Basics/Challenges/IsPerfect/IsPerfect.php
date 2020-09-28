<?php

namespace App\Basics\Challenges\IsPerfect;

/*Создайте функцию isPerfect, которая принимает число и возвращает true,
если оно совершенное, и false — в ином случае.*/

function isPerfect($num)
{
    if ($num === 0) {
        return false;
    }

    $sum = 0;
    $upperBorder = $num / 2;

    for ($divisor = 1; $divisor <= $upperBorder; $divisor++) {
        if ($num % $divisor === 0) {
            $sum += $divisor;
        }
    }

    return $sum === $num;
}
