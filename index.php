<?php
session_start();
include_once "AutoLad.php";
use classes\database;
use classes\User;
//$db=new database("phpdb");
//echo $db->query("SELECT * FROM users");
//User::login('uki',"");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyPage</title>
</head>
<body>
<?php
    if(User::isLogin()) :
?>
Вы вошли как<?= User::get()["username"] ?>
    <?php else:  ?>
    <form action="GET">
        <div>
            <input type="text" placeholder="username" name="username">
        </div>
        <div>
            <input type="password" placeholder="password" name="password">
        </div>
        <button type="submit">Enter</button>
    </form>
<?php endif; ?>
</body>
</html>>


