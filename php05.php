<?php 
//class method
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
$h1->name = "John";//set
$h1->age = 20;//set
$c1 = new Cat();
$d1 = new Dog();

$h1->sayHi();
echo $h1-> name;
echo $h1->age;//get
$c1->sayHi();//get
$d1->sayHi();