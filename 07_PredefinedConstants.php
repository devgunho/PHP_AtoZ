<?php
echo __LINE__ . "<br>";     // 2
echo __FILE__ . "<br>";
echo __DIR__ . "<br>";

function foo()
{
    echo __FUNCTION__ . "<br>";
}

foo();

class Myclass
{
    function info1()
    {
        echo __CLASS__ . "<br>";
    }
    function info2()
    {
        echo __METHOD__ . "<br>";
    }
}

$obj = new Myclass();
$obj->info1();
$obj->info2();
?>