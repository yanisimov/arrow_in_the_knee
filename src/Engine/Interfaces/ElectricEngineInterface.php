<?php

namespace src\Engine\Interfaces;

use src\Engine\EngineInterface;

interface ElectricEngineInterface extends EngineInterface
{
    public function turnOn();
}