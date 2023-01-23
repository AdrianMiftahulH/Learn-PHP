<?php
$var1 = 100;
$var2 = 200;
$var3 = $var2;

// if
if ($var1 < $var2) {
    echo "Yess, $var1 less then $var2";
}

// if else
if ($var2 != $var1) {
    echo "Yess, $var2 not equal $var1";
} else {
    echo "Yess, $var2 equal $var1";
}

// else if
// if else
if ($var2 != $var1) {
    echo "Yess, $var2 not equal $var1";
} elseif ($var2 == $var1) {
    echo "Yess, $var2 equal $var1";
} else {
    echo "variabel not valid";
}
