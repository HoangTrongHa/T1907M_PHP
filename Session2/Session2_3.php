<?php
//lay du lieu tu db
$host = "localhost";
$userDB="root";
$passDB = "root";
$dbName = "t1907m";
$conn = new mysqli($host,$userDB,$passDB,$dbName);

if ($conn ->connect_error){
    die("Khong ket noi vs db duoc");
}
$sql_text ="SELECT * FROM student";
$rs = $conn->query($sql_text);
$student = [];
if($rs-> num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
    $student[] = $row;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Danh sach sinh vien</h1>
<?php foreach ($student as $e) :?>
<table>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Mark</th>
    </tr>
    <tr>
        <th><?php echo $e["name"]?></th>
        <th><?php echo $e["age"]?></th>
        <th><?php echo $e["mark"]?></th>
    </tr>
</table>
<?php endforeach; ?>
</body>
</html>
