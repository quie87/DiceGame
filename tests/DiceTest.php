<?php

use PHPUnit\Framework\TestCase;

class DiceTest extends TestCase
{
    /** @test */

    public function shouldThrowErrorIfInputToConstructorIsNotANumber()
    {
        $this->expectException(InvalidArgumentException::class);
        $input = "A string";
        $input2 = Null;

        new Dice($input);
        new Dice($input2);
    }

    /** @test */

    public function shouldThrowErrorIfInputToConstructorIsNotAValidTypeOfDice()
    {
        $this->expectException(InvalidTypeOfDice::class);
        $input = 2;
        $input2 = 5;

        new Dice($input);
        new Dice($input2);
    }
}