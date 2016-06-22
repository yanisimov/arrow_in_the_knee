<?php

namespace src;

use src\Engine\Interfaces\PetrolEngineInterface;
use src\Vehicle\Interfaces\GasolineVehicleInterface;
use src\Vehicle\Interfaces\SecurityVehicleInterface;
use src\Vehicle\Interfaces\VehicleInterface;
use src\Vehicle\Vehicle;

class Car extends Vehicle implements VehicleInterface, GasolineVehicleInterface, SecurityVehicleInterface
{
    private $alarm;
    // always be sure car has fuel in tank ))
    private $tank = 10;

    public function __construct(PetrolEngineInterface $engine)
    {
        $this->engine = $engine;
        $this->alarm = SecurityVehicleInterface::ALARM_ON;
    }

    public function startEngine()
    {
        $this->engine->igniteEngine();
    }

    public function stopEngine()
    {
        $this->engine->turnOff();
    }

    public function setGasTank($amount)
    {
        $this->tank = $amount;
    }

    public function getGasTank()
    {
        return $this->tank;
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