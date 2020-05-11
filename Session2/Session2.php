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
foreach ($Student as $e){
    echo $e;
}
var_dump($Student);
if ($Student > 5){
    echo $Student["Name"];
}else{
    echo "Khong co sinh vien";
}
//dinh nghia 1 ham
function Alert(){
    echo "Thong bao khan cap";
}
function SendMessenger($msg = "Haha"){
echo $msg;
}
function SendMessenger1($msg =","     ){
    echo $msg;
}
SendMessenger1();
Alert();
SendMessenger1();
SendMessenger();
SendMessenger1();
SendMessenger("Quan nuong nguyen cong tru");