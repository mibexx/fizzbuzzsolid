<?php

namespace FizzBuzz\Business\Replacer;


interface ReplacerInterface
{
    /**
     * @param int $number
     *
     * @return bool
     */
    public function canReplace($number);

    /**
     * @param int $number
     *
     * @return string
     */
    public function replace($number);
}