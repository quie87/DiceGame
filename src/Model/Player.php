<?php

class Player
{
    private $name;

    public function __construct($name)
    {        
        if(!is_string($name))
        {
            throw new InvalidArgumentException();
        }

        $this->name = $name;
    }

    public function getPlayerName()
    {
        return $this->name;
    }
}