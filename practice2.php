<?php
//1
$name ="Koharu";

if($name = "Koharu"){
    echo "私はKoharuです";
} else{
    echo"私はKoharuではありません";
}

//2
$total = 0;
for ($i=0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;

//3
$fruits= array("orange", "peach", "pear", "apple", "banana");

foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n" ;
}

//応用
 for($i=1; $i<=100; $i++){
     if($i % 5 ==0){
         echo $i;
     }
 }

