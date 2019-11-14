<?php

use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    /** @test */
    
    public function shouldGetPlayerName()
    {
        $sut = new Player("Kalle");

        $actual = $sut->getPlayerName();

        $expected = "Kalle";

        $this->assertEquals($actual, $expected);
    }
}