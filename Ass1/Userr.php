
<?php  require_once "user.php";?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách người dùng</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<h1>Danh sách người dùng</h1>
<?php
$user = new \assignment1\User();
?>
<?php foreach ($user->getUsers() as $s): // ket hop ma html - php  // goi thuoc tinh cua doi tuong dung ky hieu -> ?>
    <ul>
        <li><a href="edit.php?id=<?php echo  $s["id"];?>"><?php echo $s["name"] ?></a></li>
        <li><?php echo $s["email"] ?></li>
        <li><?php echo $s["pass"] ?></li>
    </ul>
<?php endforeach;// lam the nay de khoi lan voi dau {} cua bon khac nhu if else ... ?>

</body>
</html>