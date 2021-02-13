<?php
$names = ["田中", "佐藤", "佐々木", "高橋"];
$names2 = [];
foreach($names as $key => $name){
    $number = $key + 1;
    $name2 = "会員No.".$number." ".$name;
    array_push($names2,$name2);
}
print_r($names2);
?>
