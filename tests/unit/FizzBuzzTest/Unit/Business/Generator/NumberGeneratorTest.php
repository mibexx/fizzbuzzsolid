<?php

namespace FizzBuzzTest\Unit\Business\Generator;

use FizzBuzz\Business\Generator\NumberGenerator;

class NumberGeneratorTest extends \Codeception\Test\Unit
{

    public function testGenerate()
    {
        $numberGenerator = new NumberGenerator();
        $this->assertEquals(
            [
                2,
                3,
                4,
                5
            ],
            $numberGenerator->generate(5, 2)
        );
    }
}