<?php

namespace FizzBuzz\Business\Generator;

interface NumberGeneratorInterface
{
    /**
     * @param int $to
     * @param int $from
     *
     * @return array
     */
    public function generate($to, $from = 1);
}