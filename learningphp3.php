<?php

# variadic parameters
# instead of this
#
# function sum(int|float $a, int|float $b): int|float
# { return $a + $b }
# echo sum(b: 5, a: 2);   # b is 5 and a is 2 just for knowledge from python, but in php use :
#
# do this
function sum(bool $dumpArr, int|float ...$nums)  # ... - accepting unlimited arguments and must be in the end
{
    if ($dumpArr) {
        var_dump($nums);
    }
    return array_sum($nums);
}

# and now u can add as many args as u want
printf(sum(false,5, 2, 6, 9, 123));

# static variables
printf("\n--------------------------\n");

function foo()
{
    static $a = 1;  # with static $a = 1; it will be 1 2 3
                    # increment will not be used without "static"
    return $a++;    # just $a = 1; it will be 1 1 1
}

echo foo() . "\n";  # invoking function with concatenation (.) and string ("\n")
echo foo() . "\n";
echo foo() . "\n";

