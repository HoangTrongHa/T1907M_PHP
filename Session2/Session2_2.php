<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Long ghep html</title>
</head>
<body>
<h1>Thong tin sinh vien</h1>
<?php include ("student2_2.php")?>
<?php include("student2_2.php")?>

<?php foreach ($Student as $e) :?>

<table>

    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Point</th>
        <th>Address</th>
        <th>numberPhone</th>
    </tr>
    <tr>
        <th><?php echo $e["Name"]?></th>
        <th><?php echo $e["Age"]?></th>
        <th><?php echo $e["Point"]?></th>
        <th><?php echo $e["Address"]?></th>
        <th><?php echo $e["numberPhone"]?></th>

    </tr>

</table>

    <!--    <ul>-->
<!--        <li>--><?php //echo $e["Name"]?><!--</li>-->
<!--    <li>--><?php //echo $e["Age"]?><!--</li>-->
<!--    <li>--><?php //echo $e["Point"]?><!--</li>-->
<!--    </ul>-->
<?php endforeach; ?>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
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
<section>
    <table>
        <tr>
            <th><?php echo $e ->name?></th>
            <th><?php echo $e ->age?></th>
            <th><?php echo $e ->point?></th>

        </tr>
    </table>
</section>
</body>
</html>