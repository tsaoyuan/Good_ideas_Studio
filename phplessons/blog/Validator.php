<?php

class Vaildator{
    public function string($value, $min = 1, $max = INF){
        // return strlen(trim($value)) == 0;
        $value = trim($value);
        return strlen($value) >= $min && strlen($value)<= $max;
    }
}