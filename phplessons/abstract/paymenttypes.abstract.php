<?php

abstract class Visa
{
    public function visaPayment()
    {
        echo "Perform a payment" . PHP_EOL;
    }

    abstract public function getPayment();
    private function sayHi()
    }
}