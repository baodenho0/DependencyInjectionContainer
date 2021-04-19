<?php

namespace Services\a;

require_once "Services\a\a1.php";

use Services\a\a1;

class b1
{
    private $a1;

    public function __construct(a1 $a1)
    {
        echo __METHOD__;
        $this->a1 = $a1;

        $a1->callFromB1();
    }

    public function index()
    {
        return __METHOD__;
    }
}