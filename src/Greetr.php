<?php

namespace Iocod\Greeting;

class Greetr
{
    public function greet(String $sName=null)
    {
        return 'Hai , ' . $sName . '! how is your day?';
    }
}