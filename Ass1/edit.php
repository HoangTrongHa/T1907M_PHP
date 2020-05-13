<?php require_once ("user.php");?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="col-xs-6">
        <h1 class="text-center">Edit</h1>
        <form action="post_edit.php" method="post">
            <?php
            $id = $_GET["id"];
            $user =new \assignment1\User();
            $user =$user->find($id);
            ?>
            <input type="hidden" name="id" value="<?php echo $user->id;?>">
            <div class="form-group">
                <input class="form-control" value="<?php echo $user->name?>" name="name" type="text" placeholder="Name"/>
            </div>
            <div class="form-group">
                <input class="form-control" value="<?php $user->email?>" name="email" type="email" placeholder="Email"/>
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
</html>