<?php

/*
* Функция возвращает первый найденый индекс
* переданного элемента.
* Если элемента не существует - возвращает -1.
*/

namespace App\Arrays\Lessons\FindIndex;

function findIndex(array $col, $value)
{
    foreach ($col as $index => $item) {
        if ($value === $item) {
            return $index;
        }
    }
    
    return -1;
}
