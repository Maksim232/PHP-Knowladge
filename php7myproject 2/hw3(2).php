<?php
//Задание №1
$num=3;
$name = readline("Введите имя?");

$desire = [
    'благополучия',
    'здоровья',
    'счастья'
];
$epithets = [
    'бесконечного',
    'крепкого',
    'космического'
];

$generated_congratulations = [];

for ($index = 0; count($generated_congratulations); $index++ ) {
    $randdesire = array_rand($desire);
    $randepithets = array_rand($epithets);
    $generated_congratulations [] = $epithets[$randepithets] . $desire[$randdesire];
}
$congratulations = implode(", ", $generated_congratulations);
echo "$name, от всего сердца поздравляю с праздником и желаю $congratulations";





