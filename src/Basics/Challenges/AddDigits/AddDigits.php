<?php

namespace App\Basics\Challenges\AddDigits;

/*Реализуйте функцию addDigits, которая принимает на вход неотрицательное
целое число и возвращает другое число, полученное из первого следующим
преобразованием: Итеративно сложите все входящие в него цифры до тех пор пока,
не останется одна цифра.*/

function addDigits($num)
{
    if ($num < 10) {
        return $num;
    }

    $str = (string) $num;
    $firstDigit = $str[0];
    $tail = substr($str, 1);

    return addDigits($firstDigit + addDigits($tail));
}
