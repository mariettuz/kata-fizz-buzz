<?php

namespace Kata;

class FizzBuzz
{
    public function retrieveArrayOfNumbersOrFizzOrBuzz(): array
    {
        for ($number = 1; $number <= 100; $number++) {
            if (is_int($number / 3) && is_int($number / 5)) {
                $arrayNumberOrFizzOrBuzz[] = 'FizzBuzz';
                continue;
            }

            if (is_int($number / 3)) {
                $arrayNumberOrFizzOrBuzz[] = 'Fizz';
                continue;
            }

            if (is_int($number / 5)) {
                $arrayNumberOrFizzOrBuzz[] = 'Buzz';
                continue;
            }

            $arrayNumberOrFizzOrBuzz[] = $number;
        }

        return $arrayNumberOrFizzOrBuzz;
    }
}
