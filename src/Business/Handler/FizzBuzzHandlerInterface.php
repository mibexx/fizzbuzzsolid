<?php

namespace FizzBuzz\Business\Handler;

interface FizzBuzzHandlerInterface
{
    /**
     * @param int $to
     * @param int $from
     *
     * @return array
     */
    public function getReplacedNumbers($to, $from = 1);
}