<?php

namespace Hometask7\Myproject1\Classes;

class ChildClass2 extends ParentClass
{
    public function Parent($name) {
        parent::Parent($name);
    }
    public function Do_it()
    {
        echo "Hello, it's ChildClass2";
    }
}