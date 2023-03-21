<?php

namespace Deg540\PHPTestingBoilerplate;

use GrumPHP\Util\Str;
use PhpParser\Node\Scalar\String_;


class Ohce
{

    private Date $date;
    public function __construct(Date $date)
    {
        $this->date = $date;
    }

    public function greet(string $frase): string
    {
        $fraseSeparada = explode(" ", $frase);
        if ($fraseSeparada[0] == "ohce") {
            if ($this->date->getDate() <= '12:00:00' && $this->date->getDate() >= '06:00:00'){
                return "¡Buenos días {$fraseSeparada[1]}!";
            }
            else if($this->date->getDate() < '20:00:00' && $this->date->getDate() > '12:00:00'){
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
