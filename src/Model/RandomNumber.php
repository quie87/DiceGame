<?php

class RandomNumber
{
    public function getRandomNumber(int $number) : int
    {
        return rand(1, $number);
    }
}