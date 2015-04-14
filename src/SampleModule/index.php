<?php

namespace Jkuatapp\SampleModule;

class Module
{

    /**
    * Returns today's date
    */
    public function today()
    {
        return "today is " . date("l");
    }

}

