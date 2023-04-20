<?php

namespace Hometask7\Myproject1\Classes;

class ParentClass
{
    protected $name;

    public function Parent($name)
    {
        $this->name=$name;
    }
    public function Name()
    {
        return $this->name;
    }
    public function Do_it()
    {
        echo "Hello, it's Parent class";
    }
}