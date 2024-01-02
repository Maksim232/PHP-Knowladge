<?php
//Задание №2
do {
    $numer = (int)readline("Введите кол-во задач на день?\n");
}while($numer <=0 );

$how = "Кол-во запланированных задач: $numer \n";
$sum = 0;
for ($i = 0; $i < $numer; $i++ ){
    $task = readline("Какая задача запланирована? ");
    $time = readline("Сколько понадобится времени? ");
    $how = " -$task ({$time}ч).\n";
    $sum += $time;

}

echo $how;
echo "Всего времени: {$sum}ч";









