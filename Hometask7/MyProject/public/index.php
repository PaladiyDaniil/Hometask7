<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Hometask7\Myproject1\Classes\MyClass;

$myClass = new MyClass();
echo $myClass::MY_CONST;
