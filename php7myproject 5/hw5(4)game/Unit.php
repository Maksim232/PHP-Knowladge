<?php

//код игры позаимствовал, для того чтобы разобраться в нем



class Unit
{
    private string $name;
    private float $life;
    private int $damage;


    public function __construct($name,float $life, $damage)
    {
        $this->name = $name;
        $this->life = $life;
        $this->damage = $damage;
    }


    public function Damage(Unit $unit ){
        $health = $unit->getLife();
        $health -=$this->getDamage();
        $unit->setLife($health);

    }

    /**
     * @return float
     */
    public function getLife(): float
    {
        return $this->life;
    }

    /**
     * @param float $life
     */
    public function setLife(float $life): void
    {
        $this->life = $life;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getDamage(): int
    {
        return $this->damage;
    }

    /**
     * @param int $damage
     */
    public function setDamage(int $damage): void
    {
        $this->damage = $damage;
    }

}