<?php

namespace src\Vehicle\Interfaces;

interface SecurityVehicleInterface
{
    const ALARM_ON = 1;
    const ALARM_OFF = 0;

    public function turnOnAlarm();

    public function turnOffAlarm();

    public function getAlarmState();
}