<?php

use PHPUnit\Framework\TestCase;

class DiceTest extends TestCase
{
    protected $randomNumber;

    function setup() : void
    {
        $number = 6;
        $this->randomNumber = new RandomNumber($number);
    }
    /** @test */

    public function should_Throw_Error_If_Input_To_Constructor_Is_Not_A_Number()
    {
        $this->expectException(InvalidArgumentException::class);
        $input = "A string";

        new Dice($input, $this->randomNumber);
    }

    /** @test */

    public function should_Throw_Error_If_Input_To_Constructor_Is_Not_A_Valid_Type_Of_Dice()
    {
        $this->expectException(NotAValidTypeOfDiceException::class);
        $sidesOfDice = 2;
        $sidesOfDice2 = 5;

        new Dice($sidesOfDice, $this->randomNumber);
        new Dice($sidesOfDice2, $this->randomNumber);
    }

    /** @test */
    public function should_return_dice_value()
    {
        $sidesOfDice = 6;

        $sut = new Dice($sidesOfDice, $this->randomNumber);
        $expected = $sidesOfDice;
        $actual = $sut->getDiceValue();

        $this->assertEquals($actual, $expected);
    }

    /** @test */
    public function should_roll_dice()
    {
        $sidesOfDice = 12;

        $randomMock = $this->getMockBuilder("RandomNumber")
        ->setConstructorArgs([$sidesOfDice])
        ->setMethods(["getRandomNumber"])
        ->getMock();
        
        $randomMock->method("getRandomNumber")
        ->willReturn(4);
        
        $sut = new Dice($sidesOfDice, $randomMock);
        $actual = $sut->roll();
        $expected = 4;

        $this->assertEquals($actual, $expected);
    }
}