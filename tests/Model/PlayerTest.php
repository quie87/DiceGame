<?php

use PHPUnit\Framework\TestCase;

class PlayerTest extends TestCase
{
    /** @test */
    
    public function should_Get_PlayerName()
    {
        $sut = new Player("Kalle");
     
        $actual = $sut->getPlayerName();
        $expected = "Kalle";
     
        $this->assertEquals($actual, $expected);
    }

    /** @test */

    public function should_Throw_Error_If_Input_To_Constructor_Is_Not_A_String()
    {
        $this->expectException(InvalidArgumentException::class);
        
        new Player(2);
    }
}