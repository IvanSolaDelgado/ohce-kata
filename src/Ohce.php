<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    private DateProvider $dateProvider;
    public function __construct(DateProvider $date)
    {
        $this->dateProvider = $date;
    }

    public function greet(string $frase): string
    {
        $fraseSeparada = explode(" ", $frase);
        if ($fraseSeparada[0] == "ohce") {
            if ($this->dateProvider->getDate() < '12:00:00' && $this->dateProvider->getDate() >= '06:00:00') {
                return "¡Buenos días {$fraseSeparada[1]}!";
            } elseif ($this->dateProvider->getDate() < '20:00:00' && $this->dateProvider->getDate() >= '12:00:00') {
                return "¡Buenas tardes {$fraseSeparada[1]}!";
            }
            return "¡Buenas noches {$fraseSeparada[1]}!";
        }
        if ($this->isPalindrome($frase)) {
            return "¡Bonita palabra!";
        }
        if ($frase == "Stop!") {
            return "Adios Myname";
        }
        return strrev($frase);
    }

    private function isPalindrome(string $frase): bool
    {
        if (strrev($frase) == $frase) {
            return true;
        }
        return false;
    }
}
