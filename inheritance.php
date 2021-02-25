<?php
// inheritance => "is a" relationship
class Animal{

    private $type;

    public function setType($type){
        $this->type = $type;
    }

    public function eat(){
        echo $this->type ." is Eating";
    }

    public function sleep(){
        echo $this->type ." is Sleeping";
    }
}

class Cat extends Animal{
    public function mow(){
        return 'mow';
    }
}

$animal = new Animal();

$cat = new Cat();
$cat->setType("pussy cat");

echo ($cat->eat());