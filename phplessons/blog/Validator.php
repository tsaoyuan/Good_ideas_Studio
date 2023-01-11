<?php

class Vaildator{
    public function string($value){
        return strlen(trim($value)) == 0;
    }
}