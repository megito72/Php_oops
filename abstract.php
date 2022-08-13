<?php
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
