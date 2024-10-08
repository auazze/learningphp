<?php

# switch
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
$paymentStatus_2 = 2;

$message = match ($paymentStatus_2) {
    1 => "Success",
    2 => "Denied"
};

printf("\nSecond payment status: {$message}");