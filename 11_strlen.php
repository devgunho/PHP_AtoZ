<?php
echo strlen("Hello Word!") ."<br>"; // 11
echo strlen("Hello Word!!!!") ."<br>";  // 14

$str = 'PHP';
echo strlen($str);  // 3
echo "<br>";
$message = 'こんにちは';
echo strlen($message);  // 15 bytes 
echo "<br>";
$message = 'こんにちは';
echo mb_strlen($message);   // 5 characters
echo "<br>";
