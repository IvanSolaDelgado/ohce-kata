<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;

final class OhceTest extends TestCase
{
    /**
     * @test
     */
    public function ohceGreetsMeWhenIIntroduceOhceMyname()
    {
        $ohce = new Ohce();

        $response = $ohce->greet("ohce Pedro");

        $this->assertEquals("¡Buenos días Pedro!", $response);
    }

    /**
     * @test
     */

    public function ohceReturnsReversePhraseForDefault()
    {
        $ohce = new Ohce();

        $response = $ohce->greet("hola");

        $this->assertEquals("aloh", $response);
    }

    /**
     * @test
     */

    public function ohceReturnsBonitaPalabraIfPhraseIsPalindrome()
    {
        $ohce = new Ohce();

        $response = $ohce->greet("oto");

        $this->assertEquals("¡Bonita palabra!", $response);
    }
}
