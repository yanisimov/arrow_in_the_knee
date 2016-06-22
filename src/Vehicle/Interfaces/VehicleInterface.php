<?php

namespace src\Vehicle\Interfaces;

interface VehicleInterface
{

    public function startEngine();

    public function stopEngine();

    public function accelerate();

    public function brake();
}