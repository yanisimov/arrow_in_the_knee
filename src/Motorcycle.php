<?php

namespace src;

use src\Engine\Interfaces\PetrolEngineInterface;
use src\Vehicle\Interfaces\GasolineVehicleInterface;
use src\Vehicle\Interfaces\SecurityVehicleInterface;
use src\Vehicle\Interfaces\VehicleInterface;
use src\Vehicle\Vehicle;

class Motorcycle extends Vehicle implements VehicleInterface, GasolineVehicleInterface
{
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

}