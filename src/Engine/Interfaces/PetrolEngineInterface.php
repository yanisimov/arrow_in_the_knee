<?php

namespace src\Engine\Interfaces;

use src\Engine\EngineInterface;

interface PetrolEngineInterface extends EngineInterface
{
    public function igniteEngine();
}