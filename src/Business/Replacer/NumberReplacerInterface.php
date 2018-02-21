<?php

namespace FizzBuzz\Business\Replacer;

interface NumberReplacerInterface
{
    /**
     * @param \FizzBuzz\Business\Replacer\ReplacerInterface $replacer
     */
    public function addReplacer(ReplacerInterface $replacer);

    /**
     * @param array $numberList
     *
     * @return array
     */
    public function replaceNumbers(array $numberList);
}