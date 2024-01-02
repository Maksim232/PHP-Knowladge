<?php

include "Unit.php";


$unit1 = new Unit('Iva', 20,20);
$unit2 = new Unit('Avi', 15,15);

$unit2->Damage($unit1);
print_r($unit1);


