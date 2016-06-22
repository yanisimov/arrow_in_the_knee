<?php

namespace tests;

use src\Engine\Engine;
use src\PetrolEngine;
use src\Car;
use src\Vehicle\Interfaces\SecurityVehicleInterface;

class MotorcycleTest extends \PHPUnit_Framework_TestCase
{
    public function testIgnite()
    {
        /** @var PetrolEngine $engine */
        $engine = $this->getMockBuilder(PetrolEngine::class)->getMock();
        $engine->expects($this->once())->method('igniteEngine');
        $car = new Car($engine);
        $car->startEngine();
    }

    public function testStopEngine()
    {
        /** @var PetrolEngine $engine */
        $engine = $this->getMockBuilder(PetrolEngine::class)->getMock();
        $engine->expects($this->once())->method('turnOff');
        $car = new Car($engine);
        $car->stopEngine();
    }

    public function testTank()
    {
        $gasAmount = 20;
        /** @var PetrolEngine $engine */
        $engine = $this->getMockBuilder(PetrolEngine::class)->getMock();
        $car = new Car($engine);
        $car->setGasTank($gasAmount);
        $this->assertEquals($gasAmount, $car->getGasTank());
    }

    /**
     * @expectedException Exception
     */
    public function testMovementWithoutEngineIgnited()
    {
        /** @var PetrolEngine $engine */
        $engine = $this->getMockBuilder(PetrolEngine::class)->getMock();
        $car = new Car($engine);
        $car->accelerate();
    }

    public function testMovement()
    {
        /** @var PetrolEngine $engine */
        $engine = $this->getMockBuilder(PetrolEngine::class)->getMock();
        $engine->expects($this->any())->method('getState')->will($this->returnValue(Engine::ENGINE_STARTED));
        $engine->expects($this->once())->method('goFaster');
        $engine->expects($this->once())->method('goSlower');
        $car = new Car($engine);
        $car->accelerate();
        $car->brake();
    }
}