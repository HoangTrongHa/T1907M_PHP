<?php
//lay du lieu tu db
$host = "localhost";
$userDB="root";
$passDB = "root";
$dbName = "Product";
$conn = new mysqli($host,$userDB,$passDB,$dbName);

if ($conn ->connect_error){
    die("Khong ket noi vs db duoc");
}
$sql_text ="SELECT * FROM Danhsachsanpham";
$rs = $conn->query($sql_text);
$student = [];
if($rs-> num_rows > 0) {
    while ($row = $rs->fetch_assoc()) {
        $Danhsachsanpham[] = $row;
        //moi row la 1 mang co cac key la cac colum
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<h1>Danh sach san pham</h1>
<div class="container">

        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Money</th>
                <th>quantity</th>
            </tr>
            </thead>
            <?php foreach ($Danhsachsanpham as $e) :?>

                <tbody>
            <tr>
                <th><?php echo $e["name"]?></th>
                <th><?php echo $e["description"]?></th>
                <th><?php echo $e["Money"]?></th>
                <th><?php echo $e["quantity"]?></th>

            </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
</div>

</body>
<style>
    h1{
        text-align: center;
        color: burlywood;
    }
    .container{
        padding-top: 150px;
    }
    thead{
        background:#ffe6e6 ;
    }
    table{
        width: 100%;
        border-collapse: collapse;
    }
    td, th {
        border: 1px solid 	#dddddd;
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even) {
        background-color:	#ffe6e6 ;
    }
</style>
</html>
