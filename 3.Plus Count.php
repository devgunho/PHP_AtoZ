<?php
function plus_count(){
    STATIC $count = 0;
    $count++;
    echo $count . "<br>";
}

plus_count();   // 1
plus_count();   // 2
plus_count();   // 3
plus_count();   // 4
plus_count();   // 5
?>