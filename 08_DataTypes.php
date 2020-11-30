<?php
$a = 1;
var_dump($a);   //int(1)

$b = 3.14;
var_dump($b);   // float(3.14)

$c = TRUE;
var_dump($c);   // bool(true)

$d = "HelloWorld!";
var_dump($d);   // string(12) "HelloWorld!"

$e = array(1, 2, 3, "a");
var_dump($e);   // array(4){[0]=>int(1) [1]=>int(2) [2]=>int(3) [3]=>string(1)"a"}

$f = NULL;
var_dump($f);   // NULL

class Greetings
{
    function say($name)
    {
        return "Hello $name";
    }
}

$g = new Greetings();
echo $g->say("park");    //Hello park
var_dump($g);   //object(Greetings)#1 (0) { }
?>