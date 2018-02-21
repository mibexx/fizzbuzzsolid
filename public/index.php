<?php
    use FizzBuzz\Business\FizzBuzzFacade;

    require '../vendor/autoload.php';

    $facade = new FizzBuzzFacade();
    echo '<pre>';
    print_r($facade->getReplacedNumbers(50));