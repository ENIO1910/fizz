<?php

namespace App\Console\Commands;

use App\Http\Controllers\FizzBuzzFactory;
use Illuminate\Console\Command;

class FizzBuzz extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fizzbuzz';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'fizzbuzz command';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $factory = new FizzBuzzFactory();

        for ($i = 1; $i <= 100; $i++) {
            $fizzBuzzType = $factory->getFizzBuzzType($i);
            $fizzBuzzType?->format($i);
        }
    }
}
