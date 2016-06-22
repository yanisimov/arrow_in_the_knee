<?php

namespace src;

use src\Vehicle\Interfaces\GasolineVehicleInterface;

class GasStation
{
    public static function fillTank(GasolineVehicleInterface $vehicle, $amount)
    {
        $vehicle->setGasTank($amount);
    }
}