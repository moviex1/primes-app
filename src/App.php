<?php

namespace App;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class App
{
    private Environment $twig;
    private PrimeService $primeService;

    const MAX_NUMBER = 1000000;

    public function __construct()
    {
        $loader = new FilesystemLoader(__DIR__ . '/templates');

        $this->twig = new Environment($loader);
        $this->primeService = new PrimeService();
    }

    public function run(): void
    {
        $result = '';
        if (isset($_POST['number'])) {
            $result = $this->generateResultString((int)$_POST['number']);
        }

        echo $this->twig->render('main.twig', ['result' => $result]);
    }

    private function generateResultString(int $number): string
    {
        if ($number < 0 || $number > self::MAX_NUMBER) {
            return 'Your number should be more than 0 or less or equal '.self::MAX_NUMBER;
        }

        if ($this->primeService->isPrimeNumber($number)) {
            return "$number is prime!";
        }

        $nearestPrimes = $this->primeService->findNearestPrimes($number, self::MAX_NUMBER);
        $leftPrime = $nearestPrimes[0] === -1 ? 'left prime is out of range' : "left primes is {$nearestPrimes[0]}";
        $rightPrime = $nearestPrimes[1] === -1 ? 'right prime is out of range' : "right primes is {$nearestPrimes[1]}";

        return "$leftPrime, $rightPrime";
    }
}