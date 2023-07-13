<?php
$array=array(12,34,11,67,87);
$large=0;
$small=$array[0];
for($i=0;$i<count($array);$i++){
    if($array[$i]>$large){
        $large=$array[$i];
    }
}

echo "largest number=$large<br>";
for($i=0;$i<count($array);$i++){
    if($array[$i]<$small){
        $small=$array[$i];
    }
}
    echo "smallest number=$small";


?>