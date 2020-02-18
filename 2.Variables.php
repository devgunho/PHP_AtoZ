<?php
$x = 2;
echo "x is " . $x;
function mytest()
{
    global $x, $y;
    $y = 5;
    echo "<br>" . "x*y=" . ($x * $y) . "<br>";
    return $y;
}

$y = mytest();
echo "y is " . $y;
?>