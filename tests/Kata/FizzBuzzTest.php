<?php

namespace Kata;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private FizzBuzz $fizzBuzz;

    protected function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testReturnNumber1(): void
    {
        $this->assertContains(1, $this->fizzBuzz->retrieveArrayOfNumbersAndFizz());
    }

    public function testReturnNumber1AndNumber2(): void
    {
        $this->assertContains(1, $this->fizzBuzz->retrieveArrayOfNumbersAndFizz());
        $this->assertContains(2, $this->fizzBuzz->retrieveArrayOfNumbersAndFizz());
    }

    public function testReturnNumber1Number2Number4(): void
    {
        $this->assertContains(1, $this->fizzBuzz->retrieveArrayOfNumbersAndFizz());
        $this->assertContains(2, $this->fizzBuzz->retrieveArrayOfNumbersAndFizz());
        $this->assertContains(4, $this->fizzBuzz->retrieveArrayOfNumbersAndFizz());
    }

    public function testNotReturnNumberGreaterThan100(): void
    {
        $this->assertNotContains(101, $this->fizzBuzz->retrieveArrayOfNumbersAndFizz());
        $this->assertNotContains(1007, $this->fizzBuzz->retrieveArrayOfNumbersAndFizz());
        $this->assertNotContains(1222, $this->fizzBuzz->retrieveArrayOfNumbersAndFizz());
        $this->assertNotContains(111, $this->fizzBuzz->retrieveArrayOfNumbersAndFizz());
    }

    public function testNotReturnNumberLessThan0(): void
    {
        $this->assertNotContains(-1, $this->fizzBuzz->retrieveArrayOfNumbersAndFizz());
        $this->assertNotContains(-100, $this->fizzBuzz->retrieveArrayOfNumbersAndFizz());
        $this->assertNotContains(-12, $this->fizzBuzz->retrieveArrayOfNumbersAndFizz());
        $this->assertNotContains(-67, $this->fizzBuzz->retrieveArrayOfNumbersAndFizz());
    }

    public function testReturnStringFizzForNumber3(): void
    {
        $ActualArray = $this->fizzBuzz->retrieveArrayOfNumbersAndFizz();

        $this->assertEquals('Fizz', $ActualArray[2]);
    }

    public function testReturnStringFizzForNumber6(): void
    {
        $ActualArray = $this->fizzBuzz->retrieveArrayOfNumbersAndFizz();

        $this->assertEquals('Fizz', $ActualArray[5]);
    }

    public function testReturnStringFizzForNumber9(): void
    {
        $ActualArray = $this->fizzBuzz->retrieveArrayOfNumbersAndFizz();

        $this->assertEquals('Fizz', $ActualArray[8]);
    }
}
