<?php

namespace Iocod\Greeting;

class Greetr
{
    public function greet(String $sName=null)
    {
        return 'Hallow, ' . $sName . '! How are you doing today?';
    }
}