<?php

class RandomNumber
{
    private $number;

    public function __construct(int $number)
    {
        $this->number = $number;
    }
    
    public function getRandomNumber() : int
    {
        return rand(1, $this->number);
    }
}