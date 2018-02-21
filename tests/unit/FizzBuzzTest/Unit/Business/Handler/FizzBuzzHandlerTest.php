<?php

namespace FizzBuzzTest\Unit\Business\Handler;

use FizzBuzz\Business\Generator\NumberGeneratorInterface;
use FizzBuzz\Business\Handler\FizzBuzzHandler;
use FizzBuzz\Business\Replacer\NumberReplacerInterface;

class FizzBuzzHandlerTest extends \Codeception\Test\Unit
{

    public function testGetReplacedNumbers()
    {
        $exampleNumbers = [2, 3, 4, 5];
        $expectNumbers = [2, "Test", 4, 5];

        $numberGenerator = $this->createNumberGenerator($exampleNumbers);
        $numberReplacer = $this->createNumberReplacer($exampleNumbers, $expectNumbers);

        $fizzBuzzHandler = new FizzBuzzHandler($numberGenerator, $numberReplacer);
        $this->assertEquals($expectNumbers, $fizzBuzzHandler->getReplacedNumbers(2, 5));
    }

    /**
     * @param array $exampleNumbers
     *
     * @return \PHPUnit\Framework\MockObject\MockObject
     */
    private function createNumberGenerator(array $exampleNumbers)
    {
        $numberGenerator = $this->getMockBuilder(NumberGeneratorInterface::class)
                                ->setMethods(["generate"])
                                ->getMock();

        $numberGenerator->expects($this->once())
                        ->method("generate")
                        ->with($this->equalTo(2), $this->equalTo(5))
                        ->willReturn($exampleNumbers);

        return $numberGenerator;
    }

    /**
     * @param array $exampleNumbers
     * @param array $expectNumbers
     *
     * @return \PHPUnit\Framework\MockObject\MockObject
     */
    private function createNumberReplacer(array $exampleNumbers, array $expectNumbers)
    {
        $numberReplacer = $this->getMockBuilder(NumberReplacerInterface::class)
                               ->setMethods(["replaceNumbers", "addReplacer"])
                               ->getMock();

        $numberReplacer->expects($this->once())
                       ->method("replaceNumbers")
                       ->with($this->equalTo($exampleNumbers))
                       ->willReturn($expectNumbers);

        return $numberReplacer;
    }
}