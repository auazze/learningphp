<?php

# 1. Check if year is evenly divisible by 4
# 2. Check if year is evenly divisible by 100
# 3. Unless evenly divisible by 400
# 4. Return false on passing conditions
# 5. Otherwise, return true

# Мой вариант
function isLeap(int $year): bool
{
    $divide_by_4 = $year % 4;
    $divide_by_400 = $year % 400;
    $divide_by_100 = $year % 100;

    if ($divide_by_400 == 0) {
        printf("It is a leap year");
        return true;
    }
    elseif ($divide_by_100 == 0) {
        printf("It is NOT a leap year");
        return false;
    }
    elseif ($divide_by_4 == 0) {
        printf("It is a leap year");
        return true;
    }
    else {
        printf("It is NOT a leap year");
        return false;
    }
}

isLeap(2000);
printf("\n");
isLeap(1997);

# Вариант препода
printf("\n--------------------------\n");

function isLeapTeacher(int $year1): bool
{
    if ($year1 % 4 !== 0) {
        return false;
    }
    if ($year1 % 100 === 0 && $year1 % 400 !== 0) {
        return false;
    }

    return true;
}

printf(isLeapTeacher(2000));
printf("\n");
printf(isLeapTeacher(1997));
