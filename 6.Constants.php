<?php
define("HOME", "http://localhost/");    // declaration
echo HOME . "<br>";     // http://localhost/
//echo home . "<br>";     // Warning

define("APPNAME", "My App", true);
echo APPNAME . "<br>";
//define("HOME", "http://mynewlocalhost/"); //error

function get_my_home(){
    echo HOME;
}

get_my_home();  // http://localhost/
?>