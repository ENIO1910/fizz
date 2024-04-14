<?php

namespace App\Http\Controllers;
use App\Http\Interfaces\FizzBuzzType;

class Fizz implements FizzBuzzType
{
    public function format($number): void
    {
        echo $number . " Fizz\n";
    }

}
