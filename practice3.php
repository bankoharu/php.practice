<?php

//問題１
function sum($number){
     
    return $number*2;
     
}
echo "ex1: ";
echo sum(10);
echo "\n";

//問題２
function f($a, $b){
    return $a+$b;
}
echo "ex2: ";
echo f(4,6);
echo "\n";

//問題３
$arr =array(1,3,5,7,9);

echo "ex3: " ;
echo array_product($arr);
echo "\n";




//問題４応用
function max_array($arr){
    $arr = array(2,4,6,10);
    
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
    return $max_number;
}
echo $max_number($arr);

