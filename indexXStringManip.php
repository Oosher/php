





<?php
$string ="Hello";
$string = str_pad($string ,20 ," A");

echo $string ."<br>";

$string  = str_replace("A","B",$string);

echo $string."<br>";

$string  = strrev($string);

echo $string ."<br>";

$string  = str_shuffle($string);

echo $string ."<br>";

$stringPos = strpos($string,"H");

echo $stringPos ."<br>";

$stringLen  = strlen($string);

echo $stringLen ."<br>";

$stringComp  = strcmp($string,"Hello");

echo $stringComp ."<br>";

$newString  = substr($string,13,20);

echo $newString ."<br>";

$stringToArr = explode(" ",$newString);


foreach($stringToArr as $item){

    echo "$item";

}




$arrToString = implode("-",$stringToArr);



?>
