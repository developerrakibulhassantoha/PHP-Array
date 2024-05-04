<?php
// how to create index array
$array1 = array("apple", "banana", "cherry");
$array2 = ["apple", "banana", "orange"];

// Accessing Values
echo $array1[2];
echo $array2[1];


// For Loop Through an Indexed Array
for ($i=0; $i<count($array1); $i++){
    echo $array1[$i]. "<br>";
}


// ForEach Loop Through an Indexed Array
foreach($array2 as $item){
    echo $item. "<br>";
}