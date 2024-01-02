<?php
//Задание №3
do {
    $numer = (int)readline("Введите номер пальца?\n");
}while($numer <=0 );


$numer %=8;
switch (true){
    case $numer == 1:
        echo 1;
        break;
    case $numer == 2 || $numer == 7:
        echo 2;
        break;
    case $numer == 3 || $numer == 8:
        echo 3;
        break;
    case $numer == 4 || $numer == 9:
        echo 4;
        break;
    default:
        echo 5;
}










