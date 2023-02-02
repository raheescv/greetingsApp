<?php

namespace Iocod\Greeting;

class Greetr
{
    public function greet(String $sName=null)
    {
        return 'Hallow , ' . $sName . '! how is your day?';
    }
}