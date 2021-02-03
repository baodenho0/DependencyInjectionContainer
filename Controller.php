<?php

class Controller
{
    public function __construct()
    {

    }

    public function index()
    {
//        echo __METHOD__;
    }

    public function test($a, $b, $c)
    {
        echo $a;
        echo $b;
        echo $c;
//        echo __METHOD__;
    }
}