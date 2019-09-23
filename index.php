<?php
session_start();
include_once "AutoLad.php";

use classes\database;
use classes\User;

//$db=new database("phpdb");
//echo $db->query("SELECT * FROM users");
//User::login('uki',"");

//$fileText=file_get_contents("./text.txt");
//$lines=file("./text.txt");
//foreach ($lines as $key =>$value){
//    echo str_replace("о","Z",$value);
//}


//$handle = fopen("./text.txt", "a+");
//
////while ($line=fgets($handle,4096)){
////    echo $line . "<br>";
////}
//
//fwrite($handle, "Jeka Lox");
//
//fclose($handle);


/////////////////////////v1
//?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/pulse/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <title>MyPage</title>
</head>
<body class="">
<form action="./editText.php" method="get">
    <div>
    <input type="text" placeholder="filename" class="form-control" name="file" required>
    </div>

    <div>
        <select name="select">
            <option value="read" selected>Read</option>
            <option value="rewrite">Rewrite</option>
            <option value="append">Append</option>
        </select>
    </div>

    <div>
        <textarea name="text"></textarea>
    </div>
    <button class="btn btn-block btn-dark" type="submit">Enter</button>

</form>

<?php
//    if(User::isLogin()) :
//?>
<!--Вы вошли как --><? //= User::get()["username"] ?>
<!--    <a href="/logout.php">Выйти</a>-->
<!--    --><?php //else:  ?>
<!---->
<!--    <form action="/login.php"  method="GET">-->
<!--        <div>-->
<!--            <input type="text" placeholder="username" class="form-control" name="username" required>-->
<!--        </div>-->
<!--        <div>-->
<!--            <input type="password" placeholder="password" class="form-control" name="password" required>-->
<!--        </div>-->
<!--        <button class="btn btn-block btn-dark" type="submit">Enter</button>-->

<!--    </form>-->
<?php //endif; ?>
<!--</body>-->
<!--</html>-->


