<?php

// Class, Object, Constructor, Destructor
class class1
{
    public $x = 1;
    function __construct()
    {
        echo "Class 1 constructor called<br>";
    }

    function fun1()
    {
        echo "The Value of Variable X in Class is:" . $this->x . "<br>";
    }
    function __destruct()
    {
        echo "Class 1 destructor";
    }
}

$obj = new class1();
$obj->fun1();
