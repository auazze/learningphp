<?php

# anonymous functions

# instead of this
//function multiply($num)
//{
//    return $num * 2;
//}
//
//echo multiply(5);

# do this
$multiplier = 2;

$multiply = function ($num) use($multiplier) {  # add "use(variables)"
    $multiplier = 5;
    return $num * $multiplier;  # instead of global keyword
};

//$multiply = function ($num) { # can create again and chane (from 2 to 3 for ex)
//    return $num * 3;
//};
//
//echo $multiply(5);  # in the first case - 10, but here gonna be second - 15

printf("\n");
function sum($a, $b, $callback)
{
    return $callback($a + $b);
}

echo sum(5,2,$multiply);   # 5+2 and $num=5+2 * $multiplier=5 = (5+2)*5 = 35
echo "\n" . $multiplier;    # it's not 5, it's 2

