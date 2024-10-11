<?php

# callable types

$multiplier = 2;

$multiply = fn ($num) => $num * $multiplier;  # instead of global keyword

function anotherMultiply($num)
{
    return $num * 2;
}

printf("\n");
function sum(int|float $a, int|float $b, callable $callback)
{
    return $callback($a + $b);
}

# echo sum(5,2,fn ($num) => $num * $multiplier);   # 5+2 and $num=5+2 * $multiplier=2 = (5+2)*2 = 14
echo sum(5,2,"anotherMultiply");   # 5+2 and $num=5+2 * $multiplier=2 = (5+2)*2 = 14
echo "\n" . $multiplier;    # it's not 5, it's 2
