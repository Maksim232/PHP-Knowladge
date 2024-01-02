<?php
//Задание №1
$number = 5;
$fact = function (int $number) use(&$fact){
    if ($number <= 1) return 1;
    return $number * $fact($number-1);
};
echo $fact($number);


