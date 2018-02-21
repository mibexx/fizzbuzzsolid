<?php

namespace FizzBuzzTest\Integration\Business\Replacer;

use FizzBuzz\Business\Replacer\NumberReplacer;
use FizzBuzz\Business\Replacer\ReplacerInterface;

class NumberReplacerTest extends \Codeception\Test\Unit
{
    public function testReplaceNumbersWithoutReplacer()
    {
        $numberReplacer = new NumberReplacer();
        $this->assertEquals(
            [
                2,
                3,
                4
            ], $numberReplacer->replaceNumbers(
            [
                2,
                3,
                4
            ]
        )
        );
    }

    public function testReplaceNumbersWithReplacer()
    {
        $replacer = $this->getMockBuilder(ReplacerInterface::class)
                         ->setMethods(
                             [
                                 "canReplace",
                                 "replace"
                             ]
                         )
                         ->getMock();

        $replacer->expects($this->at(0))
                 ->method("canReplace")
                 ->with($this->equalTo(2))
                 ->willReturn(false);

        $replacer->expects($this->at(1))
                 ->method("canReplace")
                 ->with($this->equalTo(3))
                 ->willReturn(true);

        $replacer->expects($this->at(2))
                 ->method("replace")
                 ->with($this->equalTo(3))
                 ->willReturn("Test");

        $replacer->expects($this->at(3))
                 ->method("canReplace")
                 ->with($this->equalTo(4))
                 ->willReturn(false);

        $numberReplacer = new NumberReplacer();
        $numberReplacer->addReplacer($replacer);
        $this->assertEquals(
            [
                2,
                "Test",
                4
            ], $numberReplacer->replaceNumbers(
            [
                2,
                3,
                4
            ]
        )
        );

    }
}