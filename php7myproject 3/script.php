<?php

/*$name = readline("Привет, как тебя зовут?\n");
$age = readline("Привет, сколько тебе лет?\n");
echo "Вас зовут $name, вам $age лет";*/

//$case1 = readline($c);
//$time1 = readline($q);
//
//
//$case2 = readline($c);
//$time2 = readline($q);
//
//
//$case3 = readline($c);
//$time3 = readline($q);
//
//
//$sum = $time1 + $time2 + $time3;

//Задание №1

$name = readline("Привет, как тебя зовут?\n");
$howmany = readline("Сколько задач у вас в планах?\n");
$q = "Сколько примерно времени эта задача займет?\n";
$c = "Какая задача стоит перед вами сегодня?\n";


if ($howmany == 0 || $howmany >=4){
    die ("Отдыхайте!");
}else{
    switch ($howmany){


        case $howmany == "1":
            $case1 = readline($c);
            $time1 = readline($q);
            $summa = $time1;
            echo "$name, сегодня у вас $howmany приоритетная задача на день:
        
        Ваше первое задание - $case1, займет $time1 ч.\n
        Примерное время выполнения плана = $summa ч.";
            break;



        case $howmany == "2":
            $case1 = readline($c);
            $time1 = readline($q);
            $case2 = readline($c);
            $time2 = readline($q);
            $summa = $time1 + $time2;
            echo "$name, сегодня у вас $howmany приоритетных задачи на день:
        
        Ваше первое задание - $case1, займет $time1 ч.\n
        Ваше второе задание - $case2, займет $time2 ч.\n
        
        Примерное время выполнения плана = $summa ч.";
            break;

        case $howmany == "3":
            $case1 = readline($c);
            $time1 = readline($q);
            $case2 = readline($c);
            $time2 = readline($q);
            $case3 = readline($c);
            $time3 = readline($q);
            $summa = $time1 + $time2 + $time3;
            echo "$name, сегодня у вас $howmany приоритетных задачи на день:
        
        Ваше первое задание - $case1, займет $time1 ч.\n
        Ваше второе задание - $case2, займет $time2 ч.\n
        Ваше третье задание - $case3, займет $time3 ч.\n
        
        Примерное время выполнения плана = $summa ч.";
            break;
    }
}





//Задание №2
/*firststep:
$answer = (int)readline("В каком году произошло крещение Руси?\n Варианты:\n 810 год\n 988 год\n 740 год\n");

if ($answer == 988) {
    die ('Вы правы!');
}  elseif ($answer == 810 || $answer == 740 ) {
    die ("Ваш ответ: $answer - неправильный ");
}  else {
    echo "Попробуйте еще раз!\n";
    goto firststep;
}

echo "$name, сегодня у вас запланировано 3 приоритетных задачи на день:
      Ваше первое задание - $case1, займет $time1 ч.\n

      Ваше второе задание - $case2, займет $time2 ч.\n

      Ваше третье задание - $case3, займет $time3 ч.\n

      Примерное время выполнения плана = $sum ч.
";



*/


