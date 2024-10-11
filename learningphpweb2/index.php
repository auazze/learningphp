<?php
# global variables

$x = 5;

include "example.php";

printf("\n");

function foo()
{
    global $x;  # grab from the 4 line

    echo $x;

    $x++;
}

foo();

printf("\n");
echo $x;