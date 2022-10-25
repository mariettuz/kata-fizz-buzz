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
        $this->assertContains(1, $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz());
    }

    public function testReturnNumber1AndNumber2(): void
    {
        $this->assertContains(1, $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz());
        $this->assertContains(2, $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz());
    }

    public function testReturnNumber1Number2Number4(): void
    {
        $this->assertContains(1, $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz());
        $this->assertContains(2, $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz());
        $this->assertContains(4, $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz());
    }

    public function testNotReturnNumberGreaterThan100(): void
    {
        $this->assertNotContains(101, $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz());
        $this->assertNotContains(1007, $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz());
        $this->assertNotContains(1222, $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz());
        $this->assertNotContains(111, $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz());
    }

    public function testNotReturnNumberLessThan0(): void
    {
        $this->assertNotContains(-1, $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz());
        $this->assertNotContains(-100, $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz());
        $this->assertNotContains(-12, $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz());
        $this->assertNotContains(-67, $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz());
    }

    public function testReturnStringFizzForNumber3(): void
    {
        $ActualArray = $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz();

        $this->assertEquals('Fizz', $ActualArray[2]);
    }

    public function testReturnStringFizzForNumber6(): void
    {
        $ActualArray = $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz();

        $this->assertEquals('Fizz', $ActualArray[5]);
    }

    public function testReturnStringFizzForNumber9(): void
    {
        $ActualArray = $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz();

        $this->assertEquals('Fizz', $ActualArray[8]);
    }

    public function testReturnStringFizzForNumber99(): void
    {
        $ActualArray = $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz();

        $this->assertEquals('Fizz', $ActualArray[98]);
    }

    public function testReturnStringBuzzForNumber5(): void
    {
        $ActualArray = $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz();

        $this->assertEquals('Buzz', $ActualArray[4]);
    }

    public function testReturnStringBuzzForNumber10(): void
    {
        $ActualArray = $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz();

        $this->assertEquals('Buzz', $ActualArray[9]);
    }

    public function testReturnStringBuzzForNumber100(): void
    {
        $ActualArray = $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz();

        $this->assertEquals('Buzz', $ActualArray[99]);
    }

    public function testReturnStringFizzBuzzForNumber30(): void
    {
        $ActualArray = $this->fizzBuzz->retrieveArrayOfNumbersOrFizzOrBuzz();

        $this->assertEquals('FizzBuzz', $ActualArray[29]);
    }
}
