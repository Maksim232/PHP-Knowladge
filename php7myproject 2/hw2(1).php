<?php
//Задание №2
do {
    $answer = (int)readline("В каком году произошло крещение Руси?\n Варианты:\n 810 год\n 988 год\n 740 год\n");

    if ($answer == 988) {
        echo ('Вы правы!');
        break;
    } elseif ($answer == 810 || $answer == 740) {
        echo("Ваш ответ: $answer - неправильный ");
        break;
    }
} while(true);






