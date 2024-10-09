<?php

# constants

print(__LINE__);
printf("\n");
print(__FILE__);
printf("\n");
print(__DIR__);

printf("\n");

if (true) {
    define("FOO", "Hello world!");

}
print(FOO);

printf("\n");

# check if the const have been created through not "true", but through "defined()"
if (!defined("FOOO")) {
    define("FOOO", "Hello world!");

}
print(FOOO);

printf("\n");

const FOOOO = "Hello world!";
print(FOOOO);

# unsetting variables
printf("\n--------------------------\n");

$name = "John";
echo $name;
unset($name);
#echo $name; # сам PhpStorm пишет Undefined variable '$name'

printf("\n");

$names = ["John", "Jane", "Bob"];
print_r($names);
unset($names[1]);
print_r($names);
# индексы сохраняются на своих местах - [0] => John и [2] => Bob
# реиндексируем
$names = array_values($names);
print_r($names);

# rounding by floor(), ceil() and round()
printf("\n--------------------------\n");

echo floor(5.9);
printf("\n");
echo floor(-0.1);
printf("\n");

echo ceil(5.9);
printf("\n");
echo ceil(-0.1);
printf("\n");

echo round(5.4);
printf("\n");
echo round(5.6);
printf("\n");

echo round(5.454, 2, PHP_ROUND_HALF_DOWN);
printf("\n");
echo round(5.656, 2);
printf("\n");
echo round(-5.454, 2);
printf("\n");
echo round(-5.656, 2, PHP_ROUND_HALF_DOWN);
printf("\n");

# альтернатива if
printf("\n--------------------------\n");

# admin - 1, moderator - 2, guest - other
$permission = 1;

if ($permission === 1) {
    echo "Hello admin";
} elseif ($permission === 2) {
    echo "Hello moderator";
} else {
    echo "Hello guest";
}

# if JavaScript, не для терминала
printf("\n--------------------------\n");
?>

<?php
function getPermissionIf(): int
{
    sleep(2);
    return 1;
}

$permission = getPermissionIf();
?>

<?php if ($permission === 1) : ?>
    <h1>hello admin</h1>
<?php elseif ($permission === 2) : ?>
    <h1>hello mod</h1>
<?php else : ?>
    <h1>hello guest</h1>
<?php endif; ?>

<?php
# switch-case / match JavaScript, не для терминала

function getPermissionSwitch(): int
{
    sleep(2);
    return 1;
}

$permission = getPermissionSwitch();

echo match (getPermissionSwitch()) {
    1 => "Hello admin",
    2 => "Hello mod",
    default => "Hello guest",
};

function getUsers(): array
{
    sleep(2);

    return ["John", "Jane"];
}

$userCount = count(getUsers());

for ($i = 0; $i < $userCount; $i += 1) {
    echo $i;
}