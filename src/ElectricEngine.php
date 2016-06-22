<?php

namespace src;

use src\Engine\Engine;
use src\Engine\Interfaces\ElectricEngineInterface;

class ElectricEngine extends Engine implements ElectricEngineInterface
{

    public function turnOn()
    {
        // Should power up engine I guess
        $this->start();
    }

    public function turnOff()
    {
        $this->stop();
    }

    public function goFaster()
    {
        // more current
        // rotor coils should move faster
    }

    public function goSlower()
    {
        // more current
        // rotor coils should move slower
    }
}