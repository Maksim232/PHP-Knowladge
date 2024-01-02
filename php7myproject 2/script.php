<?php
//попробовал сделать задание с помощью for
$massiv = [1]; //добавил 7 в массив для того чтобы проверять числа на наличие повторяющихся

for($i=0; 100> count($massiv);$i++){
    $random = rand(1,200);
    if(!in_array($random, $massiv)){
        $massiv[] = $random;
    }
}

print_r($massiv);
