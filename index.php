<?php
session_start();
include_once "AutoLad.php";

use classes\database;
use classes\User;


if ($_GET["path"]) {
    $dir = $_GET["path"];
} else {
    $dir = __DIR__;
}

$dir = realpath($dir);

echo "$dir<hr />";




if (is_dir($dir)) {
    foreach (scandir($dir) as $item) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $item);
        $shortPath = realpath($dir . DIRECTORY_SEPARATOR);
        echo "<a href='/?path=" . realpath($dir . DIRECTORY_SEPARATOR . $item) . "'>$item</a>" . "<form action=\"/editText.php\"  method=\"GET\"> 
<input type=\"text\" placeholder=\"rename\" class=\"form-control\" name=\"rename\" >
 <input type=\"hidden\" placeholder=\"path\" class=\"form-control\" name=\"path\" value=$path ><br> 
<input type=\"submit\" name=\"button\" value=\"Rename\"> <input type=\"submit\" name=\"button\" value=\"Delete\"></form>";
        echo "<br />";
    }
} else if (is_file($dir)) {
    foreach (file($dir) as $line)
        echo "<p>" . htmlspecialchars($line) . "</p>";
} else {
    echo "Error";
}

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


