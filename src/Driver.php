<?php

namespace src;

use src\Vehicle\Interfaces\SecurityVehicleInterface;
use src\Vehicle\Interfaces\VehicleInterface;

class Driver
{
    private $vehicle;

    public function __construct(VehicleInterface $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function leaveCar()
    {
        $this->vehicle->stopEngine();
        if ($this->vehicle instanceof SecurityVehicleInterface) {
            $this->vehicle->turnOnAlarm();
        }
    }

    public function prepareCar()
    {
        if ($this->vehicle instanceof SecurityVehicleInterface) {
            $this->vehicle->turnOffAlarm();
        }
        $this->vehicle->startEngine();
    }

    public function drive($speed)
    {
        $this->vehicle->accelerate();
    }

    public function stop($speed)
    {
        $this->vehicle->brake();
    }

}