<?php

# passing by value
# cup = 0;      # the original is still empty
# fillCup(10)   # only the copy got affected

# passing by reference
# cup = 0;      # original got affected too
# fillCup(10)   # copy got affected

# passing by value
$cupValue = "empty";

function fillCupValue($cupParam)
{
    $cupParam = "filled";
}

fillCupValue($cupValue);

echo $cupValue;

# passing by reference
printf("\n--------------------------\n");

$cupReference = "empty";

function fillCupReference(&$cupParam)
{
    $cupParam = "filled";
}

fillCupReference($cupReference);

echo $cupReference;
