<?php
$x = 2;
unset($x);  // $x = null;
if (isset($x)) {
    echo $x;
} else {
    echo "x is unset.";
}
?>