<?php

namespace Deg540\PHPTestingBoilerplate;

class Ohce
{
    public function greet(string $frase): string
    {
        $fraseSeparada = explode(" ", $frase);
        if ($fraseSeparada[0] == "ohce") {
            return "¡Buenos días {$fraseSeparada[1]}!";
        }
        if ($this->isPalindrome($frase)) {
            return "¡Bonita palabra!";
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
