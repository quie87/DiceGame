<?php

class Player
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getPlayerName()
    {
        return $this->name;
    }
}