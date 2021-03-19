<?php
class Animal{
    private  $family;
    private $food;

    public function __construct(string $family,string $food)
    {
         $this->family = $family;
         $this->food = $food;
    }


    public function getFamily(): string
    {
        return $this->family;
    }


    public function setFamily(string $family)
    {
        $this->family = $family;
    }


    public function getFood(): string
    {
        return $this->food;
    }


    public function setFood(string $food)
    {
        $this->food = $food;
    }

}
class Cow extends Animal{
    private $owner;

    public function __construct(string $family, string $food)
    {
        parent::__construct($family, $food);
    }


    public function getOwner()
    {
        return $this->owner;
    }


    public function setOwner($owner)
    {
        $this->owner = $owner;
    }
}
class Lion extends Animal{
    public function __construct(string $family, string $food)
    {
        parent::__construct($family, $food);
    }
}
