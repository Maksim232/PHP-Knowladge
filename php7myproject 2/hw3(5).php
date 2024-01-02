<?php
//Задание №3 б

$massiv = [1]; //добавил 7 в массив для того чтобы проверять числа на наличие повторяющихся

for($i=0; 100> count($massiv);$i++){
    $random = rand(1,200);
    if(!in_array($random, $massiv)){
        $massiv[] = $random;
    }
}

arsort($massiv);//отсортировал по значени для проверки чисел
print_r($massiv);


