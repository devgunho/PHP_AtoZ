<?php
/*
The strrpos() function finds the position of the last occurrence of a string inside another string.

Note: The strrpos() function is case-sensitive.

Related functions:
strpos() - Finds the position of the first occurrence of a string inside another string (case-sensitive)
stripos() - Finds the position of the first occurrence of a string inside another string (case-insensitive)
strripos() - Finds the position of the last occurrence of a string inside another string (case-insensitive)
*/

// Find the position of the last occurrence of "php" inside the string:
echo strrpos("I love php, I love php too!","php");  // 19
?>