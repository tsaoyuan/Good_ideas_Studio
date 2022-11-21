<?php
class BuyProduct extends Visa
{
    public function getPayment()
    {
        return $this->visaPayment();
    }
    
    public function say()
    {
        echo $this->hello();
    }
}
