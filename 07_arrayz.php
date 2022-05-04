<?php

$fruits=["apple","oranges"];
// var dumpl gives the data type of eleements in an array
// var_dump($fruits);


// lenght of an array
// $x=count($fruits);
// echo "<br>".$x;


// searching an element in an array,it returns a boolean,true or false

// $search=in_array("oranges",$fruits);
// echo $search;

// adding to an array

array_push($fruits,"ovacado");
array_unshift($fruits,"tomatoes");

// pops removes the last element of an array
array_pop($fruits);

// shift removes the first elementf of an array
array_shift($fruits);

// to remove a specific element
// unset($fruits[0]);
// print_r($fruits);

// merging two array together
$array1=[1,2,3];
$array2=[4,5,6];
$merged_array=array_merge($array1,$array2);


// reating an array of numbers from 1 to 20
$numbers=range(0,10);
print_r($numbers);
?>