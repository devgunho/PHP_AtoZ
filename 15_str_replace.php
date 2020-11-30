<?php
/*
The str_replace() function replaces some characters with some other characters in a string.

This function works by the following rules:
If the string to be searched is an array, it returns an array
If the string to be searched is an array, find and replace is performed with every array element
If both find and replace are arrays, and replace has fewer elements than find, an empty string will be used as replace
If find is an array and replace is a string, the replace string will be used for every find value

Note: This function is case-sensitive. Use the str_ireplace() function to perform a case-insensitive search.
Note: This function is binary-safe.
*/

// Replace the characters "world" in the string "Hello world!" with "Peter":
echo str_replace("world","Peter","Hello world!");
?>
