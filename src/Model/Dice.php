<?php

class Dice
{
    private $value;
    private $validAmountOfSidesOnDice = array(4, 6, 8, 10, 12, 20);
    
    private $random;
    
    public function __construct($value, $random)
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
        $this->random = $random;
    }

    public function getDiceValue()
    {
        return $this->value;
    }

    public function roll ()
    {
        return $this->random->getRandomNumber();
    }
}