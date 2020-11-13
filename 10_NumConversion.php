<?php
echo 1 + "1";   // 2
echo "<br>";
echo 2 + "2";   // 4
echo "<br>";
echo 2 + "1.2";   // 2.2
echo "<br>";
echo 2 + "3.4%";   // Notice!
echo "<br>";

echo 1 + floatval("3.4%");  // 4.4
echo "<br>";
echo 1 + intval("3.4%");  // 4
echo "<br>";
echo 1 + "3.e4";  // 30001
echo "<br>";
?>