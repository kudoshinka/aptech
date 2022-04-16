<?php
$a = array(5,5,6,4,8);
$a1 = array('a', 'b', 'c');
//Tính tổng:
    $sum = array_sum($a);
    //Tìm max
    $max = max($a);
    //Tìm min
    $min = min($a); 
echo "Tổng: ". $sum;
echo "<br>Max: ". $max;
echo "<br>Min: " .$min; 
$b = array_count_values($a);
    echo "<pre>";
    print_r($b);
    echo "</pre>";
//Gộp các mảng lại với nhau
    $newA = array_merge($a, $a1); 
    echo "<pre>";
    print_r($newA);
    echo "</pre>";
 ?>