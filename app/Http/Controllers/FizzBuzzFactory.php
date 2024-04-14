<?php

namespace App\Http\Controllers;
use App\Http\Interfaces\FizzBuzzType;
use App\Utils\FizzBuzzValidation;

class FizzBuzzFactory {
    public function getFizzBuzzType(int $number):FizzBuzzType|null {
        FizzBuzzValidation::validate($number);

        if ($number % 5 == 0 && $number % 3 == 0) {
            return new FizzBuzz();
        } elseif ($number % 5 == 0) {
            return new Buzz();
        } elseif ($number % 3 == 0) {
            return new Fizz();
        } else {
            return null;
        }
    }
}
