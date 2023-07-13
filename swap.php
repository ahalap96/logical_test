<?php
$a=10;
$b=32;
echo "Before swapping:<br>";
echo "value of a=$a<br>";
echo "value of b=$b<br><br>";
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo "After swapping:<br>";
echo "value of a=$a<br>";
echo "value of b=$b";
?>