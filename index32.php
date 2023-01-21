<?php

// Write a PHP program to find second largest element in a given array of integers.

$num = array(5,8,66,58,59,52);

$max = $sMax = 0;

for($i=0;$i<sizeof($num);$i++){
    if($num[$i]>$max){
        $sMax = $max;
        $max = $num[$i];
    }else if($num[$i]>$sMax && $num[$i] != $max){
        $sMax = $num[$i];
    }
}

echo "Second Largest Number: " . $sMax; 
?>
