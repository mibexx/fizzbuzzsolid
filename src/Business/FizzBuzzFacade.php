<?php

    namespace FizzBuzz\Business;


    class FizzBuzzFacade
    {
        /**
         * @param int $to
         * @param int $from
         *
         * @return array
         */
        public function getReplacedNumbers($to, $from = 1)
        {
            return $this->getFactory()->createReplacedNumberGenerator()->getReplacedNumbers($to, $from);
        }

        /**
         * @return \FizzBuzz\Business\FizzBuzzFactory
         */
        private function getFactory()
        {
            return new FizzBuzzFactory();
        }
    }