<?php

use PHPUnit\Framework\TestCase;

class RandomTest extends TestCase
{
    /** @test */
    public function should_return_a_interger()
    {
        $sut = new RandomNumber(6);
        $actual = $sut->getRandomNumber();

        $this->assertIsNumeric($actual);
    }
}