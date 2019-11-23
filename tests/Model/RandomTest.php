<?php

use PHPUnit\Framework\TestCase;

class RandomTest extends TestCase
{
    /** @test */
    public function should_return_a_interger()
    {
        $sut = new RandomNumber();
        $actual = $sut->getRandomNumber(6);

        $this->assertIsNumeric($actual);
    }

    /** @test */
    public function should_throw_exception_if_not_a_number()
    {
        $this->expectException(NotANumberException::class);
        $input = "A string";

        $sut = new RandomNumber();
        $sut->getRandomNumber($input);
    }
}