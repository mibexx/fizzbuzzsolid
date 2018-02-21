<?php

    namespace FizzBuzz\Business;


    use FizzBuzz\Business\Generator\NumberGenerator;
    use FizzBuzz\Business\Handler\FizzBuzzHandler;
    use FizzBuzz\Business\Replacer\NumberReplacer;
    use FizzBuzz\Business\Replacer\Replacer\BuzzReplacer;
    use FizzBuzz\Business\Replacer\Replacer\FizzBuzzReplacer;
    use FizzBuzz\Business\Replacer\Replacer\FizzReplacer;

    class FizzBuzzFactory
    {
        /**
         * @return \FizzBuzz\Business\Generator\NumberGeneratorInterface
         */
        public function createNumberGenerator()
        {
            return new NumberGenerator();
        }

        /**
         * @return \FizzBuzz\Business\Replacer\NumberReplacerInterface
         */
        public function createNumberReplacer()
        {
            return new NumberReplacer($this->getProvidedReplacer());
        }

        /**
         * @return \FizzBuzz\Business\Handler\FizzBuzzHandlerInterface
         */
        public function createReplacedNumberGenerator()
        {
            return new FizzBuzzHandler(
                $this->createNumberGenerator(),
                $this->createNumberReplacer()
            );
        }

        /**
         * @return array
         */
        protected function getProvidedReplacer()
        {
            return [
                new FizzBuzzReplacer(),
                new FizzReplacer(),
                new BuzzReplacer()
            ];
        }
    }