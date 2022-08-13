<?php
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

class class2 extends class1
{
}

$obj = new class2();
