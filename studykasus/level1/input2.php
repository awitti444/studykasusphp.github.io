<?php
// menginputkan tiga buah bilangan bulat
$a= 24;
$b= 10;
$c= 8;
if($a>$b && $a>$c){
    echo "Bilangan terbesar adalah: " . $a;
} else if ($b > $c){
    echo "Bilangan terbesar adalah: " . $b;
} else if ($a > $b){
    echo "Bilangan terbesar adalah: " . $a;
}
?>