<?php

namespace Deg540\PHPTestingBoilerplate;


class Date
{
    public function getDate(): String
    {
        return date('H:i:s');
    }
}