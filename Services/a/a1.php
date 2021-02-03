<?php

namespace Services\a;

require_once "Services\a\b1.php";
require_once "Services\b\b1.php";
require_once "Services\b\b2.php";

use Services\a\b1;
use Services\b\b1 as bb1;
use Services\b\b2 as bb2;


class a1
{
    private $b1;
    private $bb1;
    private $bb2;

    public function __construct(
        b1 $b1,
        bb1 $bb1,
        bb2 $bb2
    ) {
        $this->b1 = $b1;
        $this->bb1 = $bb1;
        $this->bb2 = $bb2;
    }

    public function index()
    {

        echo __METHOD__;
        echo "<br>";
        echo $this->b1->index();
        echo "<br>";
        echo $this->bb1->index();
        echo "<br>";
        echo $this->bb2->index();
    }
}