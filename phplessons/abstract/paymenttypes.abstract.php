<?php

abstract class Visa
{
    public function visaPayment()
    {
        echo "Perform a payment" . PHP_EOL;
    }

    abstract public function getPayment();

    private function sayHi()
    {
        echo "Hi, bro!" . PHP_EOL;
    }

    public function hello()
    {
        return $this->sayHi();
    }
}
