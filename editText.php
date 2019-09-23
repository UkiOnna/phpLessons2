<?php
include_once "AutoLad.php";
session_start();

$data = $_GET;
$name=$data["file"];
$handle=null;

switch ($data["select"]){
    case "read":
        $handle = fopen("./$name.txt", "r");
        echo file_get_contents("./$name.txt");
        break;
    case "rewrite":
        $handle = fopen("./$name.txt", "w");
        fwrite($handle, $data["text"]);
        break;
    case "append":
        $handle = fopen("./$name.txt", "a");
        fwrite($handle, $data["text"]);
        break;
}
fclose($handle);