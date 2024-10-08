<?php

# switch
printf("\nswitch\n");
$paymentStatus = 1;

switch ($paymentStatus) {
    case 1:
        printf("First payment status: Success");
        break;
    case 2:
        printf("First payment status: Pending...");
        break;
    default:
        printf("First payment status: Unknown");
}

# match
printf("\nmatch\n");
$paymentStatus_2 = "2"; # it is a string !

$message = match ($paymentStatus_2) {
    1 => "Success",
    2 => "Denied", # and it is an int !
    default => "Unknown" # so, we do not match, and this will run
};

printf("Second payment status: $message");

# functions
printf("\nfunctions\n");
function getStatus($paymentStatus_2): void
{
    $message = match ($paymentStatus_2) {
        1 => "Success",
        2 => "Denied", # and it is an int !
        default => "Unknown" # so, we do not match, and this will run
    };

    printf("Second payment status: $message");
}

getStatus(2);

# loops
printf("\nloops\n");

printf("\nwhile loop\n");
$a = 1;
do {    # "do" makes loop runs at least once
    echo $a . "\n";
    $a++;
} while ($a <= 15);

printf("\nfor loop\n");
for ($i = 0; $i <= 15; $i += 2) {
    if ($i == 6) {
        break;
    }
    printf("$i\n");
}

printf("\nforeach loop through an array\n");
$names = ["John", "Jane", "Bob"];

foreach ($names as $name) {
    printf($name . "\n");
}
printf($name);  # в эту переменную будут сохраняться итеративно те элементы, которые перебираются через массив