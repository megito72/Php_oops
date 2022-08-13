<?php

class class1
{
    public $x;
    function __construct()
    {
        $this->x = 2;
        echo "Class 1 constructor called<br>";
    }
    function fun1()
    {
        echo "The Value of Variable X in Class is:" . $this->x . "<br>";
    }
    function __destruct()
    {
        echo "Class 1 destructor<br>";
    }
}

class class2 extends class1
{

    function __construct()
    {
        parent::__construct();
        $this->x = 3;
        echo "Class 2 constructor called<br>";
    }
    function __destruct()
    {
        parent::__destruct();
        echo "Class 2 destructor";
    }
}

$obj = new class2();
$obj->fun1();
