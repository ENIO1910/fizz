<?php

namespace App\Utils;

use InvalidArgumentException;

class FizzBuzzValidation {
    public static function validate($number): void {
        if ($number < 1) {
            throw new InvalidArgumentException("Input must be a positive integer.");
        }
    }
}
