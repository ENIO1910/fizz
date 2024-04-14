<?php

namespace App\Http\Controllers;
use App\Http\Interfaces\FizzBuzzType;

class Buzz implements FizzBuzzType
{
    public function format($number): void
    {
        echo $number . " Buzz\n";
    }

}
