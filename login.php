<?php

use classes\database;

include_once "AutoLad.php";
session_start();

$data = $_GET;

if ($data["username"] == null) {
    echo "No username";
    exit();
}
if ($data["password"] == null) {
    echo "No password";
    exit();
}

$db=new database("phpdb");
$user=$db->query("SELECT * FROM users WHERE username = '" . $data["username"]."'");
$user=$user[0];
if($user!=null){
    if($user["password"]!=$data["password"]){
        echo "Wrong data";
        exit();
    }
    $_SESSION["user"]=$user["id"];
    header("Location: /");

}
else{
    echo "Wrong data";
    exit();
}
