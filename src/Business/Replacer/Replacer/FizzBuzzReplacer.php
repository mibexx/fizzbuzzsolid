<?php

namespace FizzBuzz\Business\Replacer\Replacer;


use FizzBuzz\Business\Replacer\ReplacerInterface;

class FizzBuzzReplacer implements ReplacerInterface
{
    /**
     * @param int $number
     *
     * @return bool
     */
    public function canReplace($number)
    {
        return !($number % 15);
    }

    /**
     * @param int $number
     *
     * @return string
     */
    public function replace($number)
    {
        return 'FizzBuzz';
    }

}