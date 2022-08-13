<?php
abstract class bank
{
    var $number;
    abstract function id_proof_check();
    function mobile_number_check($number)
    {
        if ($number == "") {
            echo "Empty<br>";
        } else {
            echo "Valid<br>";
        }
    }
}

class sbi extends bank
{
    public $unum = 1234567890;
    function __construct()
    {
        $this->mobile_number_check($this->unum);
    }
    function id_proof_check()
    {
        echo "ID Proof is Valid<br>";
    }
}

$obj = new sbi();
$obj->id_proof_check();
