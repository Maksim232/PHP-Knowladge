<?php


class TaskService{
    public function addComment(User $user, Task $task, $text){
    $comment = new Comment($user, $task, $text); //создаем комментарий
    $task ->setComments($comment); //воспользуемся сеттером ссылаясь на комментарий, для того чтобы его сохранить
    }
}