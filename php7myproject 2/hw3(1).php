<?php
//Задание №1
$numbersfirst = [
    0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6, 6 => 7, 7 => 8,
    8 => 9, 9 => 10, 10 => 11
];
$numberssecond = [
    0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6, 6 => 7, 7 => 8,
    8 => 9, 9 => 10, 10 => 11
];

$numbersfinish = [];
$sum=0;
for ($index = 0; $index < count($numbersfirst); $index++ ) {
    for ($index = 0; $index < count($numberssecond); $index++) {
        $numbersfinish[$index] = $numbersfirst[$index] * $numberssecond[$index];

    }
}
print_r($numbersfinish);





