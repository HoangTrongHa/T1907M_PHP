<?php
//lay du lieu tu db
function connect(){

$host = "localhost";
$userDB = "root";
$passDB = "root";
$dbName = "t1907m";
$conn = new mysqli($host, $userDB, $passDB, $dbName);
if ($conn->connect_error) {
    die("Khong ket noi vs db duoc");

}
return $conn;
}
function getAll($table){
    $conn = connect();
    //nếu connect thì code chạy tiếp bên dưới
    //echo "connected successfully";
    //Câu lệnh sql
    $sql_text = "SELECT * FROM ".$table;

    //gan bien result
    $result = $conn -> query($sql_text);
    //var_dump($result);
    $data = [];
    if($result -> num_rows > 0){
        while ($row = $result -> fetch_assoc()){
            $data[] = $row;
            //mỗi row mà 1 mảng có các key là các column
        }
        //var_dump($students);
    }
    //students là mang chứa các sinh viên
    return $data;
}
function toArray($rs){
    $data =[];
    if ($rs->num_rows >0){
        while ($row = $rs->fetch_assoc()){
            $data [] =$row;
        }
    }
    return $data;
}

