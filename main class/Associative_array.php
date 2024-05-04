<?php
// how to create Associative array
$person= array(
    'first-Name'=> 'Rakibul',
    'last_Name'=> 'Hassan',
    'Age'=>23,
    'city'=>'cox`s bazar',
    'my_wife_name'=>'sharmin akther',

);
// Accessing Values
echo $person['Age'];

//Looping Through an Associative Array
foreach($person as $key=>$value){
    echo "$key: $value <br>";

}
