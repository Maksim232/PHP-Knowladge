<?php

class Task {
    private string $descriprion;
    public bool $isDone = false;
    private int $priority = 1;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDONE;
    private User $user;
    private Array $comments = [];


    public function __construct(User $user)
    {
        $this->user = $user; //сохраняем пользователя
        $this->setDateCreated(new DateTime()); //устанавливаем дату
        $this->tasksDone();
    }

    public function tasksDone(): void
    {
        $this->setDateDone (new DateTime);
        $this->setIsDone(true);
    }

    /**
     * @return string
     */
    public function getDescriprion(): string
    {
        return $this->descriprion;
    }

    /**
     * @param string $descriprion
     */
    public function setDescriprion(string $descriprion): void
    {
        $this->descriprion = $descriprion;
        $this->setDateUpdated(new DateTime);

    }

    /**
     * @param bool $isDone
     */
    public function setIsDone(bool $isDone): void
    {
        $this->isDone = $isDone;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority(int $priority): void
    {
        $this->priority = $priority;
    }

    /**
     * @return DateTime
     */
    public function getDateUpdated(): DateTime
    {
        return $this->dateUpdated;
    }

    /**
     * @param DateTime $dateUpdated
     */
    public function setDateUpdated(DateTime $dateUpdated): void
    {
        $this->dateUpdated = $dateUpdated;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    /**
     * @return DateTime
     */
    public function getDateDONE(): DateTime
    {
        return $this->dateDONE;
    }

    /**
     * @param DateTime $dateDONE
     */
    public function setDateDONE(DateTime $dateDONE): void
    {
        $this->dateDONE = $dateDONE;
    }

    /**
     * @return DateTime
     */
    public function getDateCreated(): DateTime
    {
        return $this->dateCreated;
    }

    /**
     * @param DateTime $dateCreated
     */
    public function setDateCreated(DateTime $dateCreated): void
    {
        $this->dateCreated = $dateCreated;
    }



    /**
     * @param Comment $comment //так как у нас создается Commetn, мы меняем array на Commetn
     */
    public function setComments(Comment $comment): void //так как у нас создается Commet, мы меняем array на Commet, а созданные автоматически comments на comment
    {
        $this->comments[] = $comment;
    }

}