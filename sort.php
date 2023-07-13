<?php
$array=array(32,12,3,67,1,4);
for($i=0;$i<count($array);$i++){
for($j=0;$j<count($array)-1;$j++){
    if($array[$j+1]<$array[$j]){
        $temp=$array[$j+1];
        $array[$j+1]=$array[$j];
        $array[$j]=$temp;
    }
}
}
for($i=0;$i<count($array);$i++){
echo "$array[$i]<br>";
}
?>