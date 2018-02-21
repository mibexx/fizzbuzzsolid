<?php

namespace FizzBuzzTest\Integration\Business;

use FizzBuzz\Business\FizzBuzzFacade;

class FizzBuzzFacadeTest extends \Codeception\Test\Unit
{
    public function testFizzBuzz()
    {
        $facade = new FizzBuzzFacade();
        $this->assertEquals(
            [
                1,
                2,
                "Fizz",
                4,
                "Buzz",
                "Fizz",
                7,
                8,
                "Fizz",
                "Buzz",
                11,
                "Fizz",
                13,
                14,
                "FizzBuzz"
            ], $facade->getReplacedNumbers(15, 1)
        );
    }
}