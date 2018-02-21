<?php

namespace FizzBuzz\Business\Generator;


class NumberGenerator implements NumberGeneratorInterface
{
    /**
     * @param int $to
     * @param int $from
     *
     * @return array
     */
    public function generate($to, $from = 1)
    {
        return range($from, $to);
    }
}