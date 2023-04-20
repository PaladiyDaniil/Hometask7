<?php

namespace Hometask7\Myproject1\Classes;

class Multivitamin
{
    use TraitWithClass, TraitWithClass2 {
    TraitWithClass::Do_it insteadof TraitWithClass2;
    TraitWithClass2::Do_it as Do_itElse;
    }
}