<?php

include "Task.php";
include "User.php";
include "TaskService.php";
include "Comment.php";

$user = new User('Iva', 'iva.@mail.ru');
$task = new Task($user);
$task -> setDescriprion('Task № 1');
$task -> setPriority(2);

TaskService::addComment($user,$task,  'Good');
TaskService::addComment($user,$task,  'Fine');


print_r($task);
