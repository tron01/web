<?php
echo "<b><u>SUM OF DIGITS A NUMBER IS </u></b><br> ";
$n=$_GET['txt'];
$s=0;
$a=$n;
while($n>0)
{
$r=$n%10;
$s=$s+$r;
$n=$n/10;
}
echo "Sum of digits of the number $a is $s";
?>