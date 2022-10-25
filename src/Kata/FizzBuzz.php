<?php

namespace Kata;

class FizzBuzz
{
    public function retrieveArrayOfNumbersAndFizz(): array
    {
        for ($number = 1; $number <= 100; $number++) {
            if ($number === 3 || $number === 6 || $number === 9) {
                $arrayNumberAndFizz[] = 'Fizz';
            } else {
                $arrayNumberAndFizz[] = $number;
            }
        }

        return $arrayNumberAndFizz;
    }
}
