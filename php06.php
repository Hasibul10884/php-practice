<?php 
//integer
$a = 10;
var_dump($a);
?>

<?php 
//float
$a = 10.5;
var_dump($a);
?>

<?php 
//string
$a = "Hello";
$b = 'Hello!';
echo $a;
echo "<br>";
echo $b;
?>

<?php 
//boolean
$a = true;
$b = false;
var_dump($a);
var_dump($b);
?>

<?php 
//null
$a = "hello world";
$a = null;
var_dump($a);
?>

<?php
//array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
?>

<?php 
//object
class car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
    return "My car is a " . $this->color . " " . $this->model . "!";
    }
}
?>