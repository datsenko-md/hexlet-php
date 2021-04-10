<?php

namespace App\OOP\Challenges\AlarmClock\states;

class AlarmState implements State
{
    public function __construct($alarmClock)
    {
        $this->alarmClock = $alarmClock;
    }

    public function tick()
    {
        $this->incrementM();
        $this->normalizeTime();

        if ($this->alarmClock->isAlarmTime() && $this->alarmClock->isAlarmOn()) {
            $this->alarmClock->state = new BellState($this->alarmClock);
        }
    }

    public function getCurrentMode()
    {
        return 'alarm';
    }

    public function clickMode()
    {
        $this->alarmClock->state = new ClockState($this->alarmClock);
    }

    public function clickH()
    {
        $this->incrementH('alarm');
        $this->normalizeTime('alarm');
    }

    public function clickM()
    {
        $this->incrementM('alarm');
        $this->normalizeTime('alarm');
    }

    public function incrementH($mode = 'clock')
    {
        $this->alarmClock->data[$mode]['H'] += 1;
    }

    public function incrementM($mode = 'clock')
    {
        $this->alarmClock->data[$mode]['M'] += 1;
    }

    private function normalizeTime($mode = 'clock')
    {
        ['H' => $hours, 'M' => $minutes] = $this->alarmClock->data[$mode];
        if ($minutes >= 60 && $mode === 'clock') {
            $hours += 1;
        }
        $minutes %= 60;
        $hours %= 24;

        $this->alarmClock->data[$mode] = ['H' => $hours, 'M' => $minutes];
    }
}
