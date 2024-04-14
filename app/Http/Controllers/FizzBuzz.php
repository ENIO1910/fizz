<?php
namespace App\Http\Controllers;

use App\Http\Interfaces\FizzBuzzType;

class FizzBuzz implements FizzBuzzType {
    public function format($number): void
    {
        echo $number . " FizzBuzz\n";
    }
}
