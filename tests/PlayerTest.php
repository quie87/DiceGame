<?php

use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    /** @test */
    
    public function shouldGetPlayerName()
    {
        $sut = new \model\Player("Kalle");
     
        $actual = $sut->getPlayerName();
        $expected = "Kalle";
     
        $this->assertEquals($actual, $expected);
    }

    /** @test */

    public function shouldThrowErrorIfWrongInputToConstructor()
    {
        $this->expectException(InvalidArgumentException::class);
        
        new Player(2);
    }
}