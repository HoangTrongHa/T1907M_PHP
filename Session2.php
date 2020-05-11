<?php
//array php khong gioi han phan tu
// ket hop giua array js vs hashmap java
$ary=[];
$ary[0] = 10;
$ary[1]= "T1907M";
$ary[2]=3.14;
for ($i = 0;$i< count($ary);$i++){
    echo $ary[$i];
}
foreach ($ary as $e) {
    echo $e;
}
$ary["Poin"]=100;
var_dump($ary);

$Student=[
  "Name"=>"Hoang Trong Ha",
    "Age"=>15,
"id"=> 1
];