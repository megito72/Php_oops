<?php

//Static Variable and Static Function
// Static Variable is a variable that is shared among all the objects of a class.
// If We need to access any static variable or static function so we don't need to create an object of the class as we are doing early.

class class1
{
    public static $test = 10;
    public static function fun1()
    {
        echo "fun1<br>";
    }
}

echo class1::$test;
echo "<br>";
echo class1::fun1();
