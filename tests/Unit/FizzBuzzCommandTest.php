<?php

namespace Tests\Unit;

use App\Http\Controllers\Buzz;
use App\Http\Controllers\Fizz;
use App\Http\Controllers\FizzBuzz;
use App\Http\Controllers\FizzBuzzFactory;
use PHPUnit\Framework\TestCase;

class FizzBuzzCommandTest extends TestCase
{
    private $fizzBuzzFactory;

    protected function setUp(): void
    {
        parent::setUp();
        $this->fizzBuzzFactory = new FizzBuzzFactory();
    }

    public function testFizz(): void
    {
        $result = $this->fizzBuzzFactory->getFizzBuzzType(3);
        $this->assertInstanceOf(Fizz::class, $result);
    }

    public function testBuzz(): void
    {
        $result = $this->fizzBuzzFactory->getFizzBuzzType(5);
        $this->assertInstanceOf(Buzz::class, $result);
    }

    public function testFizzBuzz(): void
    {
        $result = $this->fizzBuzzFactory->getFizzBuzzType(15);
        $this->assertInstanceOf(FizzBuzz::class, $result);
    }

    public function testNull(): void
    {
        $result = $this->fizzBuzzFactory->getFizzBuzzType(7);
        $this->assertNull($result);
    }

    //Outputs tests
    public function testFizzOutput(): void
    {
        $this->expectOutputString("3 Fizz\n");

        $fizz = new Fizz();
        $fizz->format(3);
    }

    public function testBuzzOutput(): void
    {
        $this->expectOutputString("5 Buzz\n");

        $buzz = new Buzz();
        $buzz->format(5);
    }

    public function testFizzBuzzOutput(): void
    {
        $this->expectOutputString("15 FizzBuzz\n");

        $fizzBuzz = new FizzBuzz();
        $fizzBuzz->format(15);
    }

    public function testNegativeNumberOutput(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Input must be a positive integer.");

        $this->fizzBuzzFactory->getFizzBuzzType(-24);
    }

}
