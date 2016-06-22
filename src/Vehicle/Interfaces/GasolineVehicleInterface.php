<?php

namespace src\Vehicle\Interfaces;

interface GasolineVehicleInterface
{
    public function setGasTank($amount);

    public function getGasTank();
}