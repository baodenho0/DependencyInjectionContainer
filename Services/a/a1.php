<?php

namespace Services\a;

require_once "Services\a\b1.php";
require_once "Services\b\b1.php";
require_once "Services\b\b2.php";
require_once "Models\Example.php";
require_once "core/app.php";

use Services\a\b1;
use Services\b\b1 as bb1;
use Services\b\b2 as bb2;
use Models\Example;
use Core\App;


class a1
{
    private $b1;
    private $bb1;
    private $bb2;
    private $model;

    public function __construct(
        bb2 $bb2,
        Example $model
    ) {
        $this->bb2 = $bb2;
        $this->model = $model;
    }

    public function index()
    {

        echo __METHOD__;
        echo "<br>";
        $b1 = App::make('Services\b\b1');
        echo 'dd';
        echo $b1->index();
        //echo "<br>";
        //echo $this->bb1->index();
        echo "<br>";
        echo $this->bb2->index();
    }

    public function callFromB1()
    {
        echo __METHOD__;
    }
}