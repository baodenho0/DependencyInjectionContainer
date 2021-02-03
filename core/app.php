<?php

namespace core;

class App
{
    private static $self;

    private $class;

    public function __call($name, $arguments)
    {
        require_once $this->class . '.php';

        return $this->getParams($this->class)->$name();
    }

    public static function make($class)
    {
        if(!self::$self) {
            self::$self = new self();
        }

        self::$self->class = $class;

        self::$self->setClass($class);

        return self::$self;
    }

    private function setClass($class)
    {
        $this->class = $class;
    }

    private function getParams($class)
    {
        $reflection = new \ReflectionClass($class);
        $params = $reflection->getConstructor()->getParameters();

        if(!$params) {
            return new $class;
        }

        $arrClass = [];
        foreach ($params as $param) {
            $classChild = $param->getClass()->name;

            $arrClass[] = $this->getParams($classChild);
        }

        return new $class(...$arrClass);
    }

}