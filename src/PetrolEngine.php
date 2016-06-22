<?php

namespace src;

use src\Engine\Engine;
use src\Engine\Interfaces\PetrolEngineInterface;

class PetrolEngine extends Engine implements PetrolEngineInterface
{

    public function igniteEngine()
    {
        // Should rotate some gears I guess
        $this->start();
    }

    public function turnOff()
    {
        $this->stop();
    }

    public function goFaster()
    {
        // crankshaft should move faster
    }

    public function goSlower()
    {
        // crankshaft should move slower
    }
}