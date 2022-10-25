<?php

namespace Kata;

class FizzBuzz
{
    public function retrieveArrayOfNumbersOrFizzOrBuzz(): array
    {
        for ($number = 1; $number <= 100; $number++) {
            if ($this->checkIfNumberIsMultipleOf3And5($number)) {
                $arrayNumberOrFizzOrBuzz[] = 'FizzBuzz';
                continue;
            }

            if ($this->checkIfNumberIsMultipleOf3($number)) {
                $arrayNumberOrFizzOrBuzz[] = 'Fizz';
                continue;
            }

            if ($this->checkIfNumberIsMultipleOf5($number)) {
                $arrayNumberOrFizzOrBuzz[] = 'Buzz';
                continue;
            }

            $arrayNumberOrFizzOrBuzz[] = $number;
        }

        return $arrayNumberOrFizzOrBuzz;
    }

    private function checkIfNumberIsMultipleOf3And5(int $number): bool
    {
        return is_int($number / 3) && is_int($number / 5);
    }

    private function checkIfNumberIsMultipleOf3(int $number): bool
    {
        return is_int($number / 3);
    }

    private function checkIfNumberIsMultipleOf5(int $number): bool
    {
        return is_int($number / 5);
    }
}
