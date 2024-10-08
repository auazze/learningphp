<?php

# 1. Create function for accepting the color as string.
# 2. Create an array resistor colors with their relative numeric code.
# 3. Return a numeric code based on the color's name.
function colorCode(string $color): int {
    $array_color = ["black" => 0, "brown" => 1, "red" => 2, "orange" => 3, "yellow" => 4, "green" => 5, "blue" => 6, "violet" => 7, "grey" => 8, "white" => 9];

    return $array_color[$color];
}
printf(colorCode("red"));

# or
printf("\n--------------------------\n");
function colorCode2(string $color2): int {
    $array_color2 = ["black", "brown", "red", "orange", "yellow", "green", "blue", "violet", "grey", "white"];
    $index = array_search($color2, $array_color2);
    return $index;
    # PhpStorm предлагает сократить - return array_search($color2, $array_color2);
}
printf(colorCode2("white"));

# а вот чё сделал я изначально, то есть наоборот
printf("\n--------------------------\n");
function colorCode3(string $color3): string {
    $array_color3 = ["black", "brown", "red", "orange", "yellow", "green", "blue", "violet", "grey", "white"];
    return $array_color3[$color3];
}
printf(colorCode3(0));


# а Леа говорит, не расстраивайся, это даже полезно и забабахай вообще так:
printf("\n--------------------------\n");

function colorToCode(string $color): int
{
    $array_color = [
        "black" => 0, "brown" => 1, "red" => 2, "orange" => 3,
        "yellow" => 4, "green" => 5, "blue" => 6, "violet" => 7,
        "grey" => 8, "white" => 9
    ];

    return $array_color[$color];
}

function codeToColor(int $index): string
{
    $array_color = ["black", "brown", "red", "orange", "yellow", "green", "blue", "violet", "grey", "white"];

    return $array_color[$index];
}

printf(colorToCode("red")); // Вывод: 2
printf("\n");
printf(codeToColor(2)); // Вывод: red
