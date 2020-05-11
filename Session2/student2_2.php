<?php
//day la doan code de viet php
$Student=[];
$Student[]=[
    "Name"=>"Nguyen Van Quyet",
    "Age"=>15,
    "Point"=>10,
    "Address"=>"Cao Bang",
    "numberPhone"=>"0123456742"
];
$Student[]=[
    "Name"=>"Nguyen Van Quyet",
    "Age"=>15,
    "Point"=>10,
    "Address"=>"Cao Bang",
    "numberPhone"=>"0123456742"
];
$Student[]=[
    "Name"=>"Nguyen Van Quyet",
    "Age"=>15,
    "Point"=>10,
    "Address"=>"Cao Bang",
    "numberPhone"=>"0123456742"
];
$Student[]=[
    "Name"=>"Nguyen Van Quyet",
    "Age"=>15,
    "Point"=>10
    ,"Address"=>"Cao Bang",
    "numberPhone"=>"0123456742"
];
$Student[]=[
    "Name"=>"Nguyen Van Quyet",
    "Age"=>15,
    "Point"=>10,
    "Address"=>"Cao Bang",
    "numberPhone"=>"0123456742"
];
$json_str = file_get_contents("date/student2_2.json");
$student2_2= json_decode($json_str)
?>