<?php

namespace src\Vehicle;

use src\Engine\Engine;
use src\Engine\EngineInterface;

abstract class Vehicle
{
    /**
     * @var EngineInterface $engine
     */
    protected $engine;

    public function accelerate()
    {
        if ($this->engine->getState() == Engine::ENGINE_STOPPED) {
            throw new \Exception("You can't accelerate when engine is turned off");
        }
        $this->engine->goFaster();
    }

    public function brake()
    {
        if ($this->engine->getState() == Engine::ENGINE_STOPPED) {
            throw new \Exception("You can't brake when engine is turned off");
        }
        $this->engine->goSlower();
    }
}