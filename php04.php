<?php 
function evenOrOdd($n){
    if($n%2==0){
        return true;

    
        return false;
    }
}

$x = 19;
if(evenOrOdd($x)){
    echo "{x} is an Even number";}
else{
    echo "{x} is an Odd number";}
