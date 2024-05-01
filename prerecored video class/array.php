<?php
$students = array (
    "Rakib",
    "Anika",
    24,
    "Sharmin",

);
//echo count($students);
//echo $students[1];
//var_dump($students);

//loop jkn soro take calano hoy
$n =count($students);
for($i=0;$i<$n;$i++){
    echo $students[$i]."\n";
}

// loop jkn ses take calano hoy
 $n =count($students);
for($i=$n-1; $i>=0; $i--) {
    echo $students[$i]."\n";
}