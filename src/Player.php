<?php

use PHPUnit\Framework\Constraint\StringContains;

class Player
{
    private $name;

    public function __construct($name)
    {
        if($name == 2)
        {
            throw new InvalidArgumentException();
        }
        
        // if(!is_string($name))
        // {
        //     throw new InvalidArgumentException();
        // }

        $this->name = $name;
    }

    public function getPlayerName()
    {
        return $this->name;
    }
}