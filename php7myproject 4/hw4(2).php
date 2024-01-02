<?php
//Задание №1

$numbers = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$firstmass = function(array $numbers){

    $min = min($numbers);
    $max = max($numbers);
    $avg = array_sum($numbers) / count($numbers);
    return [
        'min' => $min,
        'max' => $max,
        'avg' => $avg
    ];

};

print_r($firstmass($numbers));


