<?php

declare(strict_types=1);

namespace App;

class App
{
    /**
     * @return array<int>
     */
    public function primes(int $number): array
    {
        if ($number <= 3) {
            return [$number];
        }

        $divis = [];
        $div = 2;
        while ($div <= $number) {
            if ($number % $div == 0) {
                array_push($divis, $div);
                $number /= $div;
            } else {
                $div++;
            }
        }

        if (empty($divis)) {
            return [$number];
        }

        return $divis;
    }
}
