<?php
//Задание №1

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$firstmass = function(int $number) {
    if ($number % 2 == 0){
        return "{$number} - Четное";
    }
    else {
        return "{$number} - Нечетное";
    }
};

$secondmass = function (int $number) {
    return $number % 2 == 0 ? "{$number} -Четное" : "{$number} - Нечетное";
};


$result1 = array_map($firstmass, $numbers);
$result2 = array_map($secondmass, $numbers);
print_r($result1);
print_r($result2);


