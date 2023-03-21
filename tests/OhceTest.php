<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;
use DateTime;
use Deg540\PHPTestingBoilerplate\Date;
use Deg540\PHPTestingBoilerplate\Ohce;
use Mockery;
use PHPUnit\Framework\TestCase;

final class OhceTest extends TestCase
{

    /**
     * @test
     */

    public function ohceReturnsReversePhraseForDefault()
    {
        $date = new Date();
        $ohce = new Ohce($date);

        $response = $ohce->greet("hola");

        $this->assertEquals("aloh", $response);
    }

    /**
     * @test
     */

    public function ohceReturnsBonitaPalabraIfPhraseIsPalindrome()
    {
        $date = new Date();
        $ohce = new Ohce($date);

        $response = $ohce->greet("oto");

        $this->assertEquals("¡Bonita palabra!", $response);
    }

    /**
     * @test
     */

    public function ohceReturnsAdiosMynameIfIIntroduceStop()
    {
        $date = new Date();
        $ohce = new Ohce($date);

        $response = $ohce->greet("Stop!");

        $this->assertEquals("Adios Myname", $response);
    }


    /**
     * @test
     */

    public function ohceGreetsMeWithBuenasTardesIfWeAreBetween12And20()
    {
        $date_mock = Mockery::mock(Date::class);
        $date_mock->expects()->getDate()->andReturn('13:00:00');
        $ohce = new Ohce($date_mock);

        $response = $ohce->greet("ohce Pedro");

        $this->assertEquals("¡Buenas tardes Pedro!", $response);
    }

    /**
     * @test
     */

    public function ohceGreetsMeWithBuenosDiasIfWeAreBetween06And12()
    {
        $date = Mockery::mock(Date::class);
        $date->expects()->getDate()->andReturn('07:00:00');
        $ohce = new Ohce($date);

        $response = $ohce->greet("ohce Pedro");

        $this->assertEquals("¡Buenos días Pedro!", $response);
    }

    /**
     * @test
     */

    public function ohceGreetsMeWithBuenasNochesIfWeAreBetween20And06()
    {
        $date = Mockery::mock(Date::class);
        $date->expects()->getDate()->andReturn('21:00:00');
        $ohce = new Ohce($date);

        $response = $ohce->greet("ohce Pedro");

        $this->assertEquals("¡Buenas noches Pedro!", $response);
    }
}
