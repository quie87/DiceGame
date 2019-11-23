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
}