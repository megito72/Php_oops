<?php
//Interface support multiple inheritance
// Interface can only contains abstract functions
// In Interface we can't define any variables
// No constructor and destructor
// All functions must be public 

interface class1
{
    public function fun1();
}
interface class2
{
    public function fun2();
}
class class3 implements class1, class2
{
    public function fun1()
    {
        echo "fun1<br>";
    }
    public function fun2()
    {
        echo "fun2<br>";
    }
}

$obj = new class3();
$obj->fun1();
$obj->fun2();
