<?php

use PHPUnit\Framework\TestCase;

class DiceTest extends TestCase
{
    protected $randomNumber;
    /** @test */

    public function should_Throw_Error_If_Input_To_Constructor_Is_Not_A_Number()
    {
        $this->expectException(InvalidArgumentException::class);
        $input = "A string";

        new Dice($input);
    }

    /** @test */

    public function should_Throw_Error_If_Input_To_Constructor_Is_Not_A_Valid_Type_Of_Dice()
    {
        $this->expectException(NotAValidTypeOfDiceException::class);
        $input = 2;
        $input2 = 5;

        new Dice($input);
        new Dice($input2);
    }

    /** @test */
    public function should_return_dice_value()
    {
        $sut = new Dice(6);
        $expected = 6;
        $actual = $sut->getDiceValue();

        $this->assertEquals($actual, $expected);
    }

    /** @test */
    public function should_roll_dice()
    {
        $randomMock = $this->getMockBuilder("RandomNumber")
            ->setConstructorArgs([12])
            ->setMethods(["getRandomNumber"])
            ->getMock();

        $randomMock->method("getRandomNumber")
            ->willReturn(4);

        $sut = new Dice(12, $randomMock);
        $actual = $sut->Roll();
        $expected = 4;

        $this->assertEquals($actual, $expected);
    }
}