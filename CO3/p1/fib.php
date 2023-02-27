<?php

$num =$_GET['txt'];

$no=0;
$n1=0;
$n2=1;
echo $n1."<br>";
echo $n2,"<br>";

while($no < $num ){
    $n3 =$n1+$n2;
    echo $n3."<br>";
    $n1=$n2;
    $n2=$n3;
    $no =$no+1;
}
?>