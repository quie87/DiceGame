<?php

class Dice
{
    private $value;
    private $validAmountOfSidesOnDice = array(4, 6, 8, 10, 12, 20);
    
    public function __construct($value)
    {
        if(!is_numeric($value))
        {
            throw new InvalidArgumentException();
        }

        if (!in_array($value, $this->validAmountOfSidesOnDice))
        {
            throw new NotAValidTypeOfDiceException();
        }

        $this->value = $value;
    }
}