<?php

namespace App\Basics\Challenges\IsPowerOfThree;

/*Реализуйте функцию isPowerOfThree которая определяет,
является ли переданное число натуральной степенью тройки. */

function isPowerOfThree($num)
{
    if ($num <= 0) {
        return false;
    }

    $log = log($num, 3);
    return $log === ceil($log);
}
