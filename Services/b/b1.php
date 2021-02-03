<?php
namespace Services\b;

use Services\a\b1 as ab1;

class b1
{
    private $a1;

    public function __construct(ab1 $a1)
    {
        $this->a1 = $a1;
    }

    public function index()
    {
        echo __METHOD__;
    }

}