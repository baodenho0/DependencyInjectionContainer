<?php

require_once "Services\a\a1.php";

use Services\a\a1;

class Controller
{
    private $a1;

    public function __construct(
        a1 $a1
    ) {
        $this->a1 = $a1;
    }

    public function index()
    {
        echo __METHOD__;

        $this->a1->index();
    }

    public function test($a, $b, $c)
    {
        echo $a;
        echo $b;
        echo $c;
//        echo __METHOD__;
    }
}