<?php

// Traits can only contain static function or static variable.
// Traits can be used to share common code among multiple classes.
// Traits are not like as general classes in that they can not be instantiated.


trait test
{
    public static $test = 10;
    public static function fun1()
    {
        echo "fun1";
    }
}



class class2
{
    function fun2()
    {
        echo "fun2";
    }
}

class class3 extends class2
{
    use test;
}

$obj = new class3();
$obj->fun2();

echo class3::$test;
