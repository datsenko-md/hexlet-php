<?php

namespace App\Basics\Challenges\BinarySum;

/*Реализуйте функцию binarySum, которая принимает на вход два бинарных числа
(в виде строк) и возвращает их сумму. Результат (вычисленная сумма)
также должен быть бинарным числом в виде строки.
binarySum('10', '1'); // 11
binarySum('1101', '101'); // 10010
*/

function binarySum($num1, $num2)
{
    return decbin(bindec($num1) + bindec($num2));
}
