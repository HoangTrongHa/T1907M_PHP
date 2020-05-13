
<?php require_once "process.php";?>
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
//$user = new \assignment1\User();
//?>
<div class="container">
    <div class="col-xs-6">

    <?php foreach ($user->getStudent() as $s): // ket hop ma html - php  // goi thuoc tinh cua doi tuong dung ky hieu -> ?>
        <ul>
            <li><a href="process.php?id=<?php echo  $s["id"];?>"><?php echo $s["name"] ?></a></li>
            <li><?php echo $s["age"] ?></li>
            <li><?php echo $s["mark"] ?></li>
            <li><?php echo $s["Street"] ?></li>
            <li><?php echo $s["dateofbirth"] ?></li>
        </ul>
    <?php endforeach;// lam the nay de khoi lan voi dau {} cua bon khac nhu if else ... ?>
    </div>
</div>

<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Register</h1>
        <form action="process.php" method="post">
            <div class="form-group">
                <input class="form-control" name="name" type="text" placeholder="Name"/>
            </div>
            <div class="form-group">
                <input class="form-control" name="email" type="email" placeholder="Email"/>
            </div>
            <div class="form-group">
                <input class="form-control" name="password" type="password" placeholder="Password"/>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-danger">Register</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>