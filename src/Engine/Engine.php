<?php

namespace src\Engine;

abstract class Engine
{
    const ENGINE_STOPPED = 0;
    const ENGINE_STARTED = 1;

    protected $state;

    public function __construct()
    {
        $this->state = Engine::ENGINE_STOPPED;
    }

    public function start()
    {
        $this->setState(Engine::ENGINE_STARTED);
    }

    public function stop()
    {
        $this->setState(Engine::ENGINE_STOPPED);
    }

    public function getState()
    {
        return $this->state;
    }

    protected function setState($state)
    {
        $this->state = $state;
    }
}