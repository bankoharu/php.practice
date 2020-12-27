<?php
echo 'hello php';
$a = 3;
$b = 7;
$result = $a +$b;
echo $result;

$array_month = [
    "jan" => "1月",
    "feb" => "2月",
    "mar" => "3月",
    "apr" => "4月",
    "may" => "5月",
    "jun" => "6月",
    "jul" => "7月",
    "oug" => "8月",
    "sep" => "9月",
    "oct" => "10月",
    "nov" => "11月",
    "dec" => "12月",
];
echo $array_month["oug"];

$hello = "Hello";
$name = "Koharu";
$world ="'s World!";
$myworld = $hello . $name . $world;
echo $myworld;

$tech_boost = "tech";
$tech_boost .= "boost";
echo $tech_boost;

$calender_2018 = [
 "January" => "1月",
  "February" => "2月", 
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
    ];
    echo $calender_2018["December"];
    
    //[]じゃなくて{}になってた。変数の名前が数字から始まっていた
     //,じゃなくて、になってた
     //10月が””で囲われてなかった
     //echoのところのDecemberが””で囲われてなかった


