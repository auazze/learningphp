<?php

# 1. Set a default value
# 2. Use string interpolation to return the message

# как сделал сам
function twoFer(string $name="you"): void
{
    printf("One for $name, one for me");
}

twoFer("Alice");    # with argument
printf("\n");
twoFer();   # default - "you"

# или return
printf("\n--------------------------\n");

function twoFer2(string $name="you"): string
{
    return printf("One for $name, one for me");
}

twoFer2("Alice");    # with argument
printf("\n");
twoFer2();   # default - "you"

# как сделал препод
printf("\n--------------------------\n");

function twoFerTeacher(string $name = "you"): string
{
    return "One for {$name}, one for me";
}