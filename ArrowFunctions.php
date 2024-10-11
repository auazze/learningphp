<?php

# arrow functions

# instead of this
//function multiply($num)
//{
//    return $num * 2;
//}
//
//echo multiply(5);

# do this
$multiplier = 2;

$multiply = fn ($num) => $num * $multiplier;  # instead of global keyword

printf("\n");
function sum($a, $b, $callback)
{
    return $callback($a + $b);
}

echo sum(5,2,$multiply);   # 5+2 and $num=5+2 * $multiplier=2 = (5+2)*2 = 14
echo "\n" . $multiplier;    # it's not 5, it's 2

