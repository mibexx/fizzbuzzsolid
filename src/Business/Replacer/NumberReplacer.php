<?php

namespace FizzBuzz\Business\Replacer;


class NumberReplacer implements NumberReplacerInterface
{
    /**
     * @var \FizzBuzz\Business\Replacer\ReplacerInterface[]
     */
    private $replacer;

    /**
     * NumberReplacer constructor.
     *
     * @param array $replacerList
     */
    public function __construct($replacerList = [])
    {
        $this->replacer = [];
        foreach ($replacerList as $replacer) {
            $this->addReplacer($replacer);
        }
    }

    /**
     * @param \FizzBuzz\Business\Replacer\ReplacerInterface $replacer
     */
    public function addReplacer(ReplacerInterface $replacer)
    {
        $this->replacer[] = $replacer;
    }

    /**
     * @param array $numberList
     *
     * @return array
     */
    public function replaceNumbers(array $numberList)
    {
        return array_map(function ($number) {
            return $this->replaceNumber($number);
        }, $numberList);
    }

    /**
     * @param int $number
     *
     * @return string
     */
    public function replaceNumber($number)
    {
        foreach ($this->replacer as $replacer) {
            if ($replacer->canReplace($number)) {
                return $replacer->replace($number);
            }
        }
        return $number;
    }

}