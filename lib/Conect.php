<?php
//lay du lieu tu db
    $host = "localhost";
    $userDB = "root";
    $passDB = "root";
    $dbName = "Product";
    $conn = new mysqli($host, $userDB, $passDB, $dbName);
    if ($conn->connect_error) {
        die("Khong ket noi vs db duoc");
    }
