<?php
function connect(){
    $host = "localhost";
    $userDB = "root";
    $passDB = "root";// xamp thi chuoi ""
    $dbName = "t1907m";
    $conn = new mysqli($host,$userDB,$passDB,$dbName);// khong can port

    if($conn->connect_error){
        die("Connect fail"); // die la ham dung luong dang chay, php la ngon ngu don luong ( single thread)
    }
    return $conn;
}

function getAll($table){
    $conn = connect();
    $sql_text = "SELECT * FROM ".$table;
    $data = [];
    $rs = $conn->query($sql_text);
    if($rs->num_rows > 0){
        while ($row = $rs->fetch_assoc()){
            $data [] = $row;
            // moi row la 1 mang, cos cac key la cac column
        }
    }
    return $data;
}

function toArray($rs){
    $data = [];
    if($rs->num_rows > 0){
        while ($row = $rs->fetch_assoc()){
            $data [] = $row;
        }
    }
    return $data;
}