<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\DateProvider;
use Deg540\PHPTestingBoilerplate\Ohce;
use Mockery;
use PHPUnit\Framework\TestCase;

final class OhceTest extends TestCase
{
    /**
     * @test
     */

    public function ohceReturnsReversePhraseIfPhraseIsNotPalindrome()
    {
        $dateProvider = new DateProvider();
        $ohce = new Ohce($dateProvider);

        $response = $ohce->greet("hola");

        $this->assertEquals("aloh", $response);
    }

    /**
     * @test
     */

    public function ohceReturnsBonitaPalabraIfPhraseIsPalindrome()
    {
        $dateProvider = new DateProvider();
        $ohce = new Ohce($dateProvider);

        $response = $ohce->greet("oto");

        $this->assertEquals("¡Bonita palabra!", $response);
    }

    /**
     * @test
     */

    public function ohceReturnsAdiosMynameIfIIntroduceStop()
    {
        $dateProvider = new DateProvider();
        $ohce = new Ohce($dateProvider);

        $response = $ohce->greet("Stop!");

        $this->assertEquals("Adios Myname", $response);
    }


    /**
     * @test
     */

    public function ohceGreetsMeWithBuenasTardesIfWeAreBetween12And20()
    {
        $dateProvider = Mockery::mock(DateProvider::class); //Arrange
        $ohce = new Ohce($dateProvider);

        $dateProvider->expects()->getDate()->andReturn('13:00:00'); //Preparacion doble

        $response = $ohce->greet("ohce Pedro"); //Act

        $this->assertEquals("¡Buenas tardes Pedro!", $response); //Assert
    }

    /**
     * @test
     */

    public function ohceGreetsMeWithBuenosDiasIfWeAreBetween06And12()
    {
        $dateProvider = Mockery::mock(DateProvider::class);
        $ohce = new Ohce($dateProvider);

        $dateProvider->expects()->getDate()->andReturn('07:00:00');

        $response = $ohce->greet("ohce Pedro");

        $this->assertEquals("¡Buenos días Pedro!", $response);
    }

    /**
     * @test
     */

    public function ohceGreetsMeWithBuenasNochesIfWeAreBetween20And06()
    {
        $dateProvider = Mockery::mock(DateProvider::class);
        $ohce = new Ohce($dateProvider);

        $dateProvider->expects('getDate')->andReturn('21:00:00');

        $response = $ohce->greet("ohce Pedro");

        $this->assertEquals("¡Buenas noches Pedro!", $response);
    }
}
