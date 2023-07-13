<?php
$string="this is a book";
$space="-";
for($i=0;$i<strlen($string);$i++){
    if($string[$i]==" "){
        $string[$i]=$space;
    }
}
echo "$string";
?>