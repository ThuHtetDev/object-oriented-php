<?php
// inheritance => "is a" relationship
class Animal{

    public function eat(){
        echo "Eating";
    }

    public function sleep(){
        echo "Sleeping";
    }
}

class Cat extends Animal{

}

$animal = new Animal();

$cat = new Cat();

print_r($cat->eat());