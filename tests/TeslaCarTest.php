<?php

namespace tests;

use src\ElectricEngine;
use src\Engine\Engine;
use src\TeslaCar;
use src\Vehicle\Interfaces\SecurityVehicleInterface;

class TeslaCarTest extends \PHPUnit_Framework_TestCase
{
    public function testTurnOn()
    {
        /** @var ElectricEngine $engine */
        $engine = $this->getMockBuilder(ElectricEngine::class)->getMock();
        $engine->expects($this->once())->method('turnOn');
        $car = new TeslaCar($engine);
        $car->startEngine();
    }

    public function testStopEngine()
    {
        /** @var ElectricEngine $engine */
        $engine = $this->getMockBuilder(ElectricEngine::class)->getMock();
        $engine->expects($this->once())->method('turnOff');
        $car = new TeslaCar($engine);
        $car->stopEngine();
    }

    public function testAlarm()
    {
        /** @var ElectricEngine $engine */
        $engine = $this->getMockBuilder(ElectricEngine::class)->getMock();
        $car = new TeslaCar($engine);

        $car->turnOnAlarm();
        $this->assertEquals(SecurityVehicleInterface::ALARM_ON, $car->getAlarmState());

        $car->turnOffAlarm();
        $this->assertEquals(SecurityVehicleInterface::ALARM_OFF, $car->getAlarmState());
    }

    /**
     * @expectedException Exception
     */
    public function testMovementWithoutEngineIgnited()
    {
        /** @var ElectricEngine $engine */
        $engine = $this->getMockBuilder(ElectricEngine::class)->getMock();
        $car = new TeslaCar($engine);
        $car->accelerate();
    }

    public function testMovement()
    {
        /** @var ElectricEngine $engine */
        $engine = $this->getMockBuilder(ElectricEngine::class)->getMock();
        $engine->expects($this->any())->method('getState')->will($this->returnValue(Engine::ENGINE_STARTED));
        $engine->expects($this->once())->method('goFaster');
        $engine->expects($this->once())->method('goSlower');
        $car = new TeslaCar($engine);
        $car->accelerate();
        $car->brake();
    }
}