<?php

namespace App;

class PrimeService
{
    public function isPrimeNumber(int $number): bool
    {
        if ($number <= 1) {
            return false;
        }
        for ($divisor = 2; $divisor <= floor(sqrt($number)); $divisor++) {
            if (($number % $divisor) === 0) {
                return false;
            }
        }

        return true;
    }

    /**
     * @return array<int>
     */
    public function findNearestPrimes(int $number, int $rightEdge): array
    {
        $left = $number - 1;
        $right = $number + 1;

        while ($left >= 0 && !$this->isPrimeNumber($left)) {
            $left--;
        }

        while ($right <= $rightEdge && !$this->isPrimeNumber($right)) {
            $right++;
        }

        $right = $this->isPrimeNumber($right) ? $right : -1;

        return [$left, $right];
    }

}