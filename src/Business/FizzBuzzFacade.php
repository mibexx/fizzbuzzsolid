<?php

    namespace FizzBuzz\Business;


    class FizzBuzzFacade
    {
        /**
         * @var FizzBuzzFactory
         */
        private $factory = null;

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
            if ($this->factory === null) {
                $this->factory = new FizzBuzzFactory();
            }
            return $this->factory;
        }
    }