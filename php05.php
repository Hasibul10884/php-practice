<?php 
class Human{
    public $name;
    public $age;

    function sayHi(){
        echo "Hi\n";
    }
    function getName(){
        return $this->name;
    }
}
class Cat{
    function sayHi(){
        echo "meow\n";
    }
}
class Dog{
    function sayHi(){
        echo "woof\n";
    }
}
$h1 = new Human();
$h1->name = "John";
$h1->age = 20;
$c1 = new Cat();
$d1 = new Dog();

$h1->sayHi();
echo $h1-> name;
echo $h1->age;
$c1->sayHi();
$d1->sayHi();