<?php

namespace Deg540\PHPTestingBoilerplate;

class DateProvider
{
    public function getDate(): string
    {
        return date('H:i:s');
    }
}
