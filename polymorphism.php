<?php

// Polymorphism means a same function may work differently in different classes.

abstract class class1
{

    abstract function fun2();
}

class class2 extends class1
{
    function fun2()
    {
        echo "fun2<br>";
    }
}

class class3 extends class1
{
    function fun2()
    {
        echo "fun3<br>";
    }
}

$obj = new class2();
$obj->fun2();

$obj2 = new class3();
$obj2->fun2();
