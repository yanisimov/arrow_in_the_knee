<?php

namespace tests;

use src\Car;
use src\GasStation;

class GasStationTest extends \PHPUnit_Framework_TestCase
{
    public function testFillTank()
    {
        $gasAmount = 30;
        /** @var Car $car */
        $car = $this->getMockBuilder(Car::class)->disableOriginalConstructor()->getMock();
        $car->expects($this->once())->method('setGasTank');
        $car->expects($this->once())->method('getGasTank')->will($this->returnValue($gasAmount));
        GasStation::fillTank($car, $gasAmount);
        $this->assertEquals($gasAmount, $car->getGasTank());
    }
}