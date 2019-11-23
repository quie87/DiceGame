<?php

class RandomNumber
{
    public function getRandomNumber($number) : int
    {
        if(!is_numeric($number))
        {
            throw new NotANumberException();
        }
 
        return rand(1, $number);
    }
}