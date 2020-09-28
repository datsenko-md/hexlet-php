<?php

namespace App\Basics\Challenges\FizzBuzz;

/*Реализуйте функцию fizzBuzz, которая выводит на экран числа в диапазоне
от $begin до $end. При этом:

Если число делится без остатка на 3, то вместо него выводится слово Fizz
Если число делится без остатка на 5, то вместо него выводится слово Buzz
Если число делится без остатка и на 3, и на 5, то вместо числа выводится слово
FizzBuzz
В остальных случаях выводится само число*/

function fizzBuzz($begin, $end)
{
    if ($begin > $end) {
        return null;
    }

    $result = '';

    for ($i = $begin; $i <= $end; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            $newPart = "FizzBuzz";
        } elseif ($i % 3 === 0) {
            $newPart = "Fizz";
        } elseif ($i % 5 === 0) {
            $newPart = "Buzz";
        } else {
            $newPart = (string) $i;
        }

        $result = "{$result} {$newPart}";
    }

    print_r(trim($result));
}
