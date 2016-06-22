<?php

namespace src;

use src\Engine\Interfaces\ElectricEngineInterface;
use src\Vehicle\Interfaces\SecurityVehicleInterface;
use src\Vehicle\Interfaces\VehicleInterface;
use src\Vehicle\Vehicle;

class TeslaCar extends Vehicle implements VehicleInterface, SecurityVehicleInterface
{
    private $alarm;

    public function __construct(ElectricEngineInterface $engine)
    {
        $this->engine = $engine;
    }

    public function startEngine()
    {
        $this->engine->turnOn();
    }

    public function stopEngine()
    {
        $this->engine->turnOff();
    }

    public function turnOnAlarm()
    {
        $this->alarm = SecurityVehicleInterface::ALARM_ON;
    }

    public function turnOffAlarm()
    {
        $this->alarm = SecurityVehicleInterface::ALARM_OFF;
    }

    public function getAlarmState()
    {
        return $this->alarm;
    }

}