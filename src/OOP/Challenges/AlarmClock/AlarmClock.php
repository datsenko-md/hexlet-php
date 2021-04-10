<?php

/*
Представьте себе будильник:

alarm clock

Пусть у него имеются три кнопки. H - кнопка для увеличения часа на единицу,
M - для увеличения минуты на единицу и кнопка Mode, которая переключает
часы в режим настройки будильника. В этом режиме на экране отображается
время срабатывания будильника, а кнопки H и M устанавливают не текущее
время, а время срабатывания будильника. Повторное нажатие кнопки Mode
возвращает часы в обычный режим. Кроме того, затяжное нажатие на кнопку
Mode приводит к тому, что будильник активируется. Такое же нажатие ещё
раз отключает будильник.

После этого, если текущее время совпадает со временем будильника,
включается звонок, который отключается либо нажатием кнопки Mode, либо
самопроизвольно через минуту. Кнопки H и M в режиме звонка (когда сработал
будильник) не активны.

Поведение часов с будильником уже является сложным, поскольку одни и те же
входные воздействия (нажатие одних и тех же кнопок) в зависимости от режима
инициируют различные действия.

В программных и программно-аппаратных вычислительных системах сущности со
сложным поведением встречаются очень часто. Таким свойством обладают
устройства управления, сетевые протоколы, диалоговые окна, персонажи
компьютерных игр и многие другие объекты и системы.

Подведём итог. У нас есть следующие действия:

Установка времени
Установка времени срабатывания будильника
Включение/Выключение будильника
Отключение звонка будильника
При использовании кнопок H и M часы и минуты изменяются независимо, и никак
друг на друга не влияют (как и в большинстве реальных будильников). То есть
если происходит увеличение минут с 59 до 60 (сброс на 00), то цифра с часами
остается неизменной.

Интерфейсными методами часов являются:

clickMode() - нажатие на кнопку Mode
longClickMode() - долгое нажатие на кнопку Mode
clickH() - нажатие на кнопку H
clickM() - нажатие на кнопку M
tick() - при вызове, увеличивает время на одну минуту. Если новое время
совпало со временем на будильнике, то часы переключаются в режим срабатывания
будильника (bell).
isAlarmOn() - показывает включен ли режим будильника
isAlarmTime() - возвращает true, если время на часах совпадает со временем на
будильнике
getMinutes() - возвращает минуты, установленные на часах
getHours() - возвращает часы, установленные на часах
getAlarmMinutes() - возвращает минуты, установленные на будильнике
getAlarmHours() - возвращает часы, установленные на будильнике
getCurrentMode() - возвращает текущий режим (alarm | clock | bell)
Основной спецификацией к данной задачe нужно считать тесты.
*/

namespace App\OOP\Challenges\AlarmClock;

use App\OOP\Challenges\AlarmClock\states\AlarmState;
use App\OOP\Challenges\AlarmClock\states\BellState;
use App\OOP\Challenges\AlarmClock\states\ClockState;

class AlarmClock
{
    public function __construct()
    {
        $this->data = [
            'clock' => [
                'H' => 12,
                'M' => 0
            ],
            'alarm' => [
                'H' => 6,
                'M' => 0
            ],
            'isAlarmOn' => false
        ];

        $this->state = new ClockState($this);
    }
    
    public function isAlarmOn()
    {
        return $this->data['isAlarmOn'];
    }

    public function getCurrentMode()
    {
        return $this->state->getCurrentMode();
    }

    public function clickMode()
    {
        $this->state->clickMode();
    }

    public function longClickMode()
    {
        $this->data['isAlarmOn'] = !$this->data['isAlarmOn'];
    }

    public function tick()
    {
        $this->state->tick();
    }

    public function isAlarmTime()
    {
        $currTime = $this->data['clock'];
        $alarmTime = $this->data['alarm'];
        return $currTime === $alarmTime;
    }

    public function clickH()
    {
        $this->state->clickH();
    }

    public function clickM()
    {
        $this->state->clickM();
    }


    public function getMinutes()
    {
        return $this->data['clock']['M'];
    }
    
    public function getHours()
    {
        return $this->data['clock']['H'];
    }

    public function getAlarmMinutes()
    {
        return $this->data['alarm']['M'];
    }

    public function getAlarmHours()
    {
        return $this->data['alarm']['H'];
    }
}
