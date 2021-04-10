<?php

namespace App\OOP\Challenges\AlarmClock\states;

interface State
{
    public function clickH();
    public function clickM();
    public function tick();
}
