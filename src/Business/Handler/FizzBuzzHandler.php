<?php

namespace FizzBuzz\Business\Handler;


use FizzBuzz\Business\Generator\NumberGeneratorInterface;
use FizzBuzz\Business\Replacer\NumberReplacerInterface;

class FizzBuzzHandler implements FizzBuzzHandlerInterface
{
    /**
     * @var \FizzBuzz\Business\Generator\NumberGeneratorInterface
     */
    private $numberGenerator;

    /**
     * @var \FizzBuzz\Business\Replacer\NumberReplacerInterface
     */
    private $numberReplacer;

    /**
     * FizzBuzzHandler constructor.
     *
     * @param \FizzBuzz\Business\Generator\NumberGeneratorInterface $numberGenerator
     * @param \FizzBuzz\Business\Replacer\NumberReplacerInterface $numberReplacer
     */
    public function __construct(
        NumberGeneratorInterface $numberGenerator,
        NumberReplacerInterface $numberReplacer
    ) {
        $this->numberGenerator = $numberGenerator;
        $this->numberReplacer = $numberReplacer;
    }

    /**
     * @param int $to
     * @param int $from
     *
     * @return array
     */
    public function getReplacedNumbers($to, $from = 1)
    {
        return $this->numberReplacer->replaceNumbers(
            $this->numberGenerator->generate($to, $from)
        );
    }

}