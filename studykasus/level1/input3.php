<?php
// menginputkan empat buah bilangan bulat
$a= 20;
$b= 2;
$c= 8;
$d= 4;
if($a > $b && $a > $c && $a > $d){
    echo "Bilangan terbesar adalah: " . $a;
} else if ($b > $c && $b > $d){
    echo "Bilangan terbesar adalah: " . $b;
} else if ($c > $d){
    echo "Bilangan terbesar adalah: " . $c;
} else if ($a > $c){
    echo "Bilangan terbesar adalah: " . $a;
} 
?>