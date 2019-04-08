<?php 
 function sum($num) { 
    $sum = 0; 
    for ($i = 0; $i < strlen($num); $i++){ 
        $sum += $num[$i]; 
    } 
    return $sum; 
 } 
  
$num = "45";
echo "Sum of digits of $num is $sum" ;
echo sum($num); 
?> 