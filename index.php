<?php

class Animal{
    protected $type;
    protected $groups = [];
    protected $color;

    public function __construct($type,$groups = [],$color){
        $this->type = $type;
        $this->groups = $groups;
        $this->color = $color;
    }

    public static function create(...$params){
        return new static(...$params);
    }

    public function getType(){
        return $this->type;
    }

    public function groups(){
        return $this->groups;
    }

    public function setPower($power){
        $this->power = $power;
    }

    public function getPower(){
        return $this->power;
    }

    public function getColor(){
        return $this->color;
    }

}

class Group{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }
}

$groups = [new Group("Barhubali"),new Group("karry"),new Group("kitty")];
// $animal = new Animal('dog',$groups);
$animal = Animal::create('dog',$groups,'black');


// print_r(new Group("Barhubali"));

// $animal->setPower("fire kicking");
// print_r($animal->getPower());

print_r($animal->groups());
