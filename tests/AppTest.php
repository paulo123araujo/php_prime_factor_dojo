<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\App;

class AppTest extends TestCase
{
    /** @test */
    public function shouldReturnTwoOnTwoNumberGiven()
    {
        $app = new App();

        $result = $app->primes(2);

        $this->assertEquals([2], $result);
    }

    /** @test */
    public function shouldReturnThreeOnThreeNumberGiven()
    {
        $app = new App();

        $result = $app->primes(3);

        $this->assertEquals([3], $result);
    }

    /** @test */
    public function shouldReturnCorrectNumbersOnFourNumberGiven()
    {
        $app = new App();

        $result = $app->primes(4);

        $this->assertEquals([2, 2], $result);
    }

    /** @test */
    public function shouldReturnCorrectNumbersOnFiveNumberGiven()
    {
        $app = new App();

        $result = $app->primes(5);

        $this->assertEquals([5], $result);
    }

    /** @test */
    public function shouldReturnCorrectNumbersOnSixNumberGiven()
    {
        $app = new App();

        $result = $app->primes(6);

        $this->assertEquals([2, 3], $result);
    }

    /** @test */
    public function shouldReturnCorrectNumberOnSevenNumberGiven()
    {
        $app = new App();

        $result = $app->primes(7);

        $this->assertEquals([7], $result);
    }

    /** @test */
    public function shouldReturnCorrectNumberOnEightNumberGiven()
    {
        $app = new App();

        $result = $app->primes(8);

        $this->assertEquals([2, 2, 2], $result);
    }
}
