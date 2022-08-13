<?php
//Abstract Class - Abstract class is a class that cannot be instantiated. It can only be inherited from.
// Abstract Calls have atleast one abstract function.
// Abstract Functions are defined as public and abstract.
// Abstract Functions cannot have body.
// Abstract Functions can have parameters.
abstract class class1
{
    const val = 2;
    abstract function test();
}

class class2 extends class1
{
    function test()
    {
        echo "The Value of Variable X in Class is:" . self::val . "<br>";
    }
}


$obj = new class2();
$obj->test();
