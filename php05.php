<?php 
class Human{
   function sayHi(){
       echo "salam\n";
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
$c1 = new Cat();
$d1 = new Dog();

$h1->sayHi();
$c1->sayHi();
$d1->sayHi();